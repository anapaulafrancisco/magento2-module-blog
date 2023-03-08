<?php

declare(strict_types=1);

namespace MageAna\Blog\Model\ResourceModel\Post;

use MageAna\Blog\Model\Post as PostModel;
use MageAna\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}
