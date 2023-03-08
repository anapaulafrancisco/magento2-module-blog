<?php

declare(strict_types=1);

namespace MageAna\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use MageAna\Blog\Model\ResourceModel\Post as PostResourceModel;

class Post extends AbstractModel
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
