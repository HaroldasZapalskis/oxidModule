[{$smarty.block.parent}]
[{oxstyle  include=$oViewConf->getModuleUrl("hzharoldaszapalskis", "out/src/css/hzharoldaszapalskisproductclass.css")}]
[{if $oDetailsProduct->oxarticles__productclass->value == "1"}]
        <p id="hzharoldaszapalskisproductclass">[{oxmultilang ident="HZ_HAROLDASZAPALSKIS_FIRST_CLASS_PRODUCT"}]</p>
[{/if}]
[{if $oDetailsProduct->oxarticles__productclass->value == "2"}]
        <p id="hzharoldaszapalskisproductclass">[{oxmultilang ident="HZ_HAROLDASZAPALSKIS_SECOND_CLASS_PRODUCT"}]</p>
[{/if}]
[{if $oDetailsProduct->oxarticles__productclass->value == "3"}]
        <p id="hzharoldaszapalskisproductclass">[{oxmultilang ident="HZ_HAROLDASZAPALSKIS_LOWER_CLASS_PRODUCT"}]</p>
[{/if}]
