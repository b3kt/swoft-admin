<?php


namespace SwoftAdmin\Tool\View\Button;


use SwoftAdmin\Tool\View\BaseButton;

class NewWindow extends BaseButton
{
    public $url;
    public $name;

    public $height = 600;
    public $width = 800;

    public $icon = "";
    /** @var string 最大化 */
    public $mix  = "false";

    public function __construct(string $url, $name = "添加",$icon = "")
    {
        $this->url = admin_url($url, false);
        $this->name = $name;
        $this->icon = $icon;
    }

    public function toString(): string
    {
        $str = <<<button
                        <button class="layui-btn"
                                onclick="xadmin.open('{$this->name}','{$this->url}',{$this->width},{$this->height},{$this->mix})">
                            <i class="layui-icon">{$this->icon}</i>{$this->name}
                        </button>
button;
        return $str;
    }
}
