<?php

declare(strict_types=1);

namespace MageAna\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    public const TABLE_NAME = 'mageana_blog_post';
    public const PRIMARY_KEY = 'post_id';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}
