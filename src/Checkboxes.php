<?php


namespace Tanthammar\TallForms;


use Tanthammar\TallForms\Traits\HasOptions;

class Checkboxes extends BaseField
{
    use HasOptions;

    public $type = 'checkboxes';
    public $align_label_top = true;
    public $allowed_in_array = false;

}
