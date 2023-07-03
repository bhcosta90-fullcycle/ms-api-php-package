<?php

namespace BRCas\AC\Category\Domain\Entities;

use BRCas\CA\Domain\Abstracts\EntityAbstract;
use BRCas\CA\Domain\ValueObject\Uuid;
use DateTime;

class Category extends EntityAbstract
{
    public function __construct(
        protected string $name,
        protected ?string $description = null,
        protected bool $isActive = true,
        protected ?Uuid $id = null,
        protected ?DateTime $createdAt = null,
    )
    {
        $this->id = $this->id ?: Uuid::make();
        $this->createdAt = $this->createdAt ?: new DateTime();
        parent::__construct();
    }
}
