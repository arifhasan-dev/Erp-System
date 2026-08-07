<?php


namespace App\Repositories;


use App\Models\PurchasePayment;
use App\Repositories\Interfaces\PurchasePaymentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class PurchasePaymentRepository extends BaseRepository implements PurchasePaymentRepositoryInterface
{
    public function __construct(PurchasePayment $model)
    {
        parent::__construct($model);
    }
    public function updateOrCreateByPurchaseId(int $purchaseId,array $data): PurchasePayment
    {
        return $this->model->updateOrCreate(['purchase_id' =>$purchaseId],$data);
    }
    public function deleteByPurchaseId(int $purchaseId): bool
    {
        return $this->model->where('purchase_id',$purchaseId)->delete();
    }
}
