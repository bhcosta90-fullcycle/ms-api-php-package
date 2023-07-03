<?php

use BRCas\AC\Category\Domain\Entities\Category;
use BRCas\CA\Domain\ValueObject\Uuid;

beforeEach(fn () => $this->entity = new Category(
    name: 'testing',
    isActive: true,
));

test("verify properties of category entity", function () {
    expect($this->entity->name)->not->toBeEmpty();
    expect($this->entity->name)->toBeString();

    expect($this->entity->description)->toBeNull();
    expect($this->entity->isActive)->toBeTrue();
    expect($this->entity->isActive)->toBeBool();

    expect($this->entity->createdAt())->not->toBeNull();
    expect($this->entity->createdAt)->toBeInstanceOf(DateTime::class);

    expect($this->entity->id())->not->toBeNull();
    expect($this->entity->id)->toBeInstanceOf(Uuid::class);

    $category = new Category(
        name: 'testing',
        description: 'testing',
        isActive: false,
    );

    expect($category->description)->not->toBeNull();
    expect($category->isActive)->toBeFalse();
});
