<?php
namespace PlusTimeIT\EasyForms\Interfaces;

interface TooltipInterface
{
    public function getActivator(): string;

    public function getCloseDelay():  string | int;

    public function setCloseDelay(string | int $close_delay);

    public function getAttach():  string | bool;

    public function setActivator(string $activator);

    public function setAttach(string | bool $attach);

    public function getCloseOnBack(): bool;

    public function setCloseOnBack(bool $close_on_back);

    public function getCloseOnContentClick(): bool;

    public function setCloseOnContentClick(bool $close_on_content_click);

    public function getContained(): bool;

    public function setContained(bool $contained);

    public function getContentClass();

    public function setContentClass($content_class);

    public function getContentProps();

    public function setContentProps($content_props);

    public function getDisabled(): bool;

    public function setDisabled(bool $disabled);

    public function getEager(): bool;

    public function setEager(bool $eager);

    public function getHeight(): string | int;

    public function setHeight(string | int $height);

    public function getMaxHeight(): string | int;

    public function setMaxHeight(string | int $max_height);

    public function getMaxWidth(): string | int;

    public function setMaxWidth(string | int $max_width);

    public function getMinHeight(): string | int;

    public function setMinHeight(string | int $min_height);

    public function getMinWidth(): string | int;

    public function setMinWidth(string | int $min_width);

    public function getNoClickAnimation(): bool;

    public function setNoClickAnimation(bool $no_click_animation);

    public function getOffset(): int | string;

    public function setOffset(int | string $offset);

    public function getOpenDelay():  string | int;

    public function setOpenDelay(string | int $open_delay);

    public function getOpenOnClick(): bool;

    public function setOpenOnClick(bool $open_on_click);

    public function getOpenOnFocus(): bool;

    public function setOpenOnFocus(bool $open_on_focus);

    public function getOpenOnHover(): bool;

    public function setOpenOnHover(bool $open_on_hover);

    public function getScrim(): string | bool;

    public function setScrim(string | bool $scrim);

    public function getText(): string;

    public function setText(string $text);

    public function getTheme(): string;

    public function setTheme(string $theme);

    public function getTransition(): string;

    public function setTransition(string $transition);

    public function getWidth(): string | int;

    public function setWidth(string | int $width);

    public function getZIndex(): string | int;

    public function setZIndex(string | int $z_index);

    public function toArray();

    public function toJson();
}
