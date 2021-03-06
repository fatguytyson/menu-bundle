<?php
/**
 * Copyright (c) 2019. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace FGC\MenuBundle\Event;

use FGC\MenuBundle\Entity\Menu;
use Symfony\Contracts\EventDispatcher\Event;

class DiscoverMenuEvent extends Event
{
    const NAME = "fgc_menu.discover";

    protected $items = [];

    /**
     * @return Menu[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Menu $item
     */
    public function addMenuItem(Menu $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @param Menu[] $menu
     */
    public function addMenu($menu)
    {
        foreach ($menu as $item) {
            if ($item instanceof Menu) {
                $this->items[] = $item;
            }
        }

        return $this;
    }
}