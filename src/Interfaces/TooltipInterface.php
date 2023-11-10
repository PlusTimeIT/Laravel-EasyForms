<?php

namespace PlusTimeIT\EasyForms\Interfaces;

interface TooltipInterface
{
    public function getActivator(): bool;

    public function getAttach(): string|bool;

    public function getCloseDelay(): string|int;

    public function getCloseOnBack(): bool;

    public function getCloseOnContentClick(): bool;

    public function getContained(): bool;

    public function getContentClass(): mixed;

    public function getContentProps(): mixed;

    public function getDisabled(): bool;

    public function getEager(): bool;

    public function getHeight(): string|int;

    public function getMaxHeight(): string|int;

    public function getMaxWidth(): string|int;

    public function getMinHeight(): string|int;

    public function getMinWidth(): string|int;

    public function getNoClickAnimation(): bool;

    public function getOffset(): int|string;

    public function getOpenDelay(): string|int;

    public function getOpenOnClick(): bool;

    public function getOpenOnFocus(): bool;

    public function getOpenOnHover(): bool;

    public function getScrim(): string|bool;

    public function getText(): string;

    public function getTheme(): string;

    public function getTransition(): string;

    public function getWidth(): string|int;

    public function getZIndex(): string|int;

    public function setActivator(bool $activator);

    public function setAttach(string|bool $attach);

    public function setCloseDelay(string|int $close_delay);

    public function setCloseOnBack(bool $close_on_back);

    public function setCloseOnContentClick(bool $close_on_content_click);

    public function setContained(bool $contained);

    public function setContentClass(mixed $content_class);

    public function setContentProps(mixed $content_props);

    public function setDisabled(bool $disabled);

    public function setEager(bool $eager);

    public function setHeight(string|int $height);

    public function setMaxHeight(string|int $max_height);

    public function setMaxWidth(string|int $max_width);

    public function setMinHeight(string|int $min_height);

    public function setMinWidth(string|int $min_width);

    public function setNoClickAnimation(bool $no_click_animation);

    public function setOffset(int|string $offset);

    public function setOpenDelay(string|int $open_delay);

    public function setOpenOnClick(bool $open_on_click);

    public function setOpenOnFocus(bool $open_on_focus);

    public function setOpenOnHover(bool $open_on_hover);

    public function setScrim(string|bool $scrim);

    public function setText(string $text);

    public function setTheme(string $theme);

    public function setTransition(string $transition);

    public function setWidth(string|int $width);

    public function setZIndex(string|int $z_index);

    public function toArray(): array;

    public function toJson(): string;
}
