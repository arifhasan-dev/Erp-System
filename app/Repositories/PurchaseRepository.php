<?php


namespace App\Repositories;


use App\Repositories\Interfaces\PurchaseRepositoryInterface;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;

class PurchaseRepository extends BaseRepository implements PurchaseRepositoryInterface
{
    public function __construct(Purchase $purchase)
    {
        parent::__construct($purchase);
    }
    public function getAll()
    {
        return $this->model->with(['supplier','items','payments'])->latest()->paginate(20);
    }
    public function findById(int $id)
    {
       return $this->model->with(['supplier','items','payments'])->findOrFail($id);
    }
    public function generatePurchaseNo(int $id): String
    {
        return sprintf(
            'PO-%s-%05d',
            now()->format('Ymd'),
            $id
        );
    }
}
