<?php


namespace App\Repositories;


use App\Models\PurchaseItem;
use App\Repositories\Interfaces\PurchaseItemRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PurchaseItemRepository extends BaseRepository implements PurchaseItemRepositoryInterface
{
    public function __construct(PurchaseItem $model)
    {
        parent::__construct($model);
    }
    public function createMany(array $items)
    {
        return $this->model->insert($items);
    }
    public function deleteByPurchaseId(int $purchaseId):bool
    {
        return $this->model->where('purchase_id',$purchaseId)->delete();

    }
}
