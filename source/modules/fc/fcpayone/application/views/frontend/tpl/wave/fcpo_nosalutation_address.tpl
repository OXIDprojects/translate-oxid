[{if $delivadr}]
    [{if $delivadr->oxaddress__oxcompany->value}] <strong>[{$delivadr->oxaddress__oxcompany->value}]</strong><br>[{/if}]
    [{if $delivadr->oxaddress__oxaddinfo->value}] [{$delivadr->oxaddress__oxaddinfo->value}]<br>[{/if}]
    [{if $delivadr->oxaddress__oxsal->value}][{$delivadr->oxaddress__oxsal->value|oxmultilangsal}]&nbsp;[{/if}]
    [{if $delivadr->oxaddress__oxfname->value || $delivadr->oxaddress__oxlname->value}][{$delivadr->oxaddress__oxfname->value}]&nbsp;[{$delivadr->oxaddress__oxlname->value}]<br>[{/if}]
    [{if $delivadr->oxaddress__oxstreet->value || $delivadr->oxaddress__oxstreetnr->value}][{$delivadr->oxaddress__oxstreet->value}]&nbsp;[{$delivadr->oxaddress__oxstreetnr->value}]<br>[{/if}]
    [{if $delivadr->oxaddress__oxstateid->value}][{$delivadr->oxaddress__oxstateid->value}] [{/if}]
    [{if $delivadr->oxaddress__oxzip->value || $delivadr->oxaddress__oxcity->value}][{$delivadr->oxaddress__oxzip->value}]&nbsp;[{$delivadr->oxaddress__oxcity->value}]<br>[{/if}]
    [{if $delivadr->oxaddress__oxcountry->value}][{$delivadr->oxaddress__oxcountry->value}]<br><br>[{/if}]
    [{if $delivadr->oxaddress__oxfon->value}]<strong>[{oxmultilang ident="PHONE"}]</strong> [{$delivadr->oxaddress__oxfon->value}]<br>[{/if}]
    [{if $delivadr->oxaddress__oxfax->value}]<strong>[{oxmultilang ident="FAX"}]</strong> [{$delivadr->oxaddress__oxfax->value}]<br>[{/if}]
[{else}]
    [{if $oxcmp_user->oxuser__oxcompany->value}] [{$oxcmp_user->oxuser__oxcompany->value}]<br> [{/if}]
    [{if $oxcmp_user->oxuser__oxaddinfo->value}] [{$oxcmp_user->oxuser__oxaddinfo->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxustid->value}] [{oxmultilang ident="VAT_ID_NUMBER"}] [{$oxcmp_user->oxuser__oxustid->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxsal->value}][{$oxcmp_user->oxuser__oxsal->value|oxmultilangsal}] [{/if}]
    [{if $oxcmp_user->oxuser__oxfname->value || $oxcmp_user->oxuser__oxlname->value}][{$oxcmp_user->oxuser__oxfname->value}]&nbsp;[{$oxcmp_user->oxuser__oxlname->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxstreet->value || $oxcmp_user->oxuser__oxstreetnr->value}][{$oxcmp_user->oxuser__oxstreet->value}]&nbsp;[{$oxcmp_user->oxuser__oxstreetnr->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxstateid->value}][{$oxcmp_user->oxuser__oxstateid->value}] [{/if}]
    [{if $oxcmp_user->oxuser__oxzip->value || $oxcmp_user->oxuser__oxcity->value}][{$oxcmp_user->oxuser__oxzip->value}]&nbsp;[{$oxcmp_user->oxuser__oxcity->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxcountry->value}][{$oxcmp_user->oxuser__oxcountry->value}]<br><br>[{/if}]
    [{if $oxcmp_user->oxuser__oxusername->value}]<strong>[{oxmultilang ident="EMAIL"}]</strong> [{$oViewConf->fcpoAmazonEmailDecode($oxcmp_user->oxuser__oxusername->value)}]<br><br>[{/if}]
    [{if $oxcmp_user->oxuser__oxfon->value}]<strong>[{oxmultilang ident="PHONE"}]</strong> [{$oxcmp_user->oxuser__oxfon->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxfax->value}]<strong>[{oxmultilang ident="FAX"}]</strong> [{$oxcmp_user->oxuser__oxfax->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxmobfon->value}]<strong>[{oxmultilang ident="CELLUAR_PHONE"}]</strong> [{$oxcmp_user->oxuser__oxmobfon->value}]<br>[{/if}]
    [{if $oxcmp_user->oxuser__oxprivfon->value}]<strong>[{oxmultilang ident="PERSONAL_PHONE"}]</strong> [{$oxcmp_user->oxuser__oxprivfon->value}]<br>[{/if}]
[{/if}]