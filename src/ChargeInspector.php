<?php

namespace CherryAudio\ChargeInspector;

use Laravel\Nova\ResourceTool;

class ChargeInspector extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Charge Inspector';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'charge-inspector';
    }
}
