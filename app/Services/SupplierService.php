<?php


namespace App\Services;

use App\Repositories\Interfaces\SupplierBankAccountRepositoryInterface;
use App\Repositories\Interfaces\SupplierRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Supplier;

class SupplierService
{
    protected SupplierRepositoryInterface $supplierRepository;
    protected SupplierBankAccountRepositoryInterface $supplierBankAccountRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository,
      SupplierBankAccountRepositoryInterface $supplierBankAccountRepository)
    {
        $this->supplierRepository = $supplierRepository;
        $this->supplierBankAccountRepository = $supplierBankAccountRepository;
    }
    public function store(array $data)
    {
        $uploadedFiles = [];

        DB::beginTransaction();
        try {
            $data['code'] = $this->supplierRepository->generateSupplierCode();

            if (isset($data['image']) && $data['image']->isValid())
            {
                $path = $data['image']->store('suppliers','public');
                $data['image'] = $path;
                $uploadedFiles[] = $path;
            }
            if (isset($data['company_image']) && $data['company_image']->isValid())
            {
                $path = $data['company_image']->store('suppliers/company','public');
                $data['company_image'] = $path;
                $uploadedFiles[] = $path;
            }

            $data['created_by'] = auth()->id();

            $supplier = $this->supplierRepository->create($data);

            $bankData = [
                'supplier_id' => $supplier->id,
                'bank_name' => $data['bank_name'],
                'account_name' => $data['account_name'],
                'account_type' => $data['account_type'],
                'account_number' => $data['account_number'],
                'swift_iban' => $data['swift_iban'] ?? null,
                'routing_number' => $data['routing_number'] ?? null,
                'branch_code' => $data['branch_code'] ?? null,
                'bank_city' => $data['bank_city'] ?? null,
                'bank_country' => $data['bank_country'] ?? null,
                'is_primary' => $data['is_primary'] ?? true,
                'default_payment' => $data['default_payment'] ?? true,
            ];

            $this->supplierBankAccountRepository->create($bankData);

            DB::commit();

            return $supplier;
        }
        catch (\Throwable $e)
        {
            DB::rollBack();

            foreach ($uploadedFiles as $file)
            {
                Storage::disk('public')->delete($file);
            }

            throw $e;
        }
    }
    public function update(array $data,Supplier $supplier)
    {
        $uploadedFiles = [];
        DB::beginTransaction();

        try {
            if (isset($data['image']) && $data['image']->isValid())
            {
                if ($supplier->image && Storage::disk('public')->exists($supplier->image))
                {
                    Storage::disk('public')->delete($supplier->image);
                }
                $path = $data['image']->store('suppliers','public');
                $data['image'] = $path;
                $uploadedFiles[] = $path;
            }
            else
            {
                $data['image'] = $supplier->image;
            }

            if (isset($data['company_image']) && $data['company_image']->isValid())
            {
                if ($supplier->company_image && Storage::disk('public')->exists($supplier->company_image))
                {
                    Storage::disk('public')->delete($supplier->company_image);
                }
                $path = $data['company_image']->store('suppliers/company','public');
                $data['company_image'] = $path;
                $uploadedFiles[] = $path;
            }
            else
            {
                $data['company_image'] =$supplier->company_image;
            }

            $data['updated_by'] = auth()->id();

            $this->supplierRepository->update($supplier->id,$data);

            $bankAccount = $supplier->bankAccounts()->where('is_primary' ,true)->first();

            if ($bankAccount)
            {
                $bankData = [
                    'bank_name'       => $data['bank_name'],
                    'account_name'    => $data['account_name'],
                    'account_type'    => $data['account_type'],
                    'account_number'  => $data['account_number'],
                    'swift_iban'      => $data['swift_iban'] ?? null,
                    'routing_number'  => $data['routing_number'] ?? null,
                    'branch_code'     => $data['branch_code'] ?? null,
                    'bank_city'       => $data['bank_city'] ?? null,
                    'bank_country'    => $data['bank_country'] ?? null,
                    'is_primary'      => $data['is_primary'] ?? true,
                    'default_payment' => $data['default_payment'] ?? true,
                ];

                $this->supplierBankAccountRepository->update($bankAccount->id,$bankData);
            }
            DB::commit();
            return $supplier->fresh();
        }
        catch (\Throwable $e)
        {
            DB::rollBack();

            foreach ($uploadedFiles as $file)
            {
                Storage::disk('public')->delete($file);
            }
            throw $e;
        }
    }
    public function destroy(Supplier $supplier)
    {
        DB::beginTransaction();
        try {
            foreach ($supplier->bankAccounts as $bankAccount) {

                $this->supplierBankAccountRepository->delete($bankAccount->id);

            }
            $this->supplierRepository->delete($supplier->id);

            DB::commit();

            return true;
        }
        catch (\Throwable $e)
        {
            DB::rollBack();
            throw $e;
        }
    }
    public function getAll()
    {
        return $this->supplierRepository->getAll();
    }

}
