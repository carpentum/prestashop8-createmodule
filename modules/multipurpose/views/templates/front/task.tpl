{extends file="page.tpl"}

{block name="content"}
    <ul>
    <li>
        {l s='Number of products' mod='multipurpose'}: {$nb_product}
    </li>
    <li>
        {l s='Categories' mod='multipurpose'}
        <ul>
            {foreach from=$categories item=cat}
                <li>{$cat['name']}</li>
            {/foreach}
        </ul>
    </li>
    <li>{$shop_name}</li>
    <li>{$manufacturer['name']}</li>
    </ul>
{/block}