<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: ファイルの削除

{alternative:plain}

利用者様、

転送番号{transfer.id}は{cfg:site_name}から削除されたため、ダウンロードできなくなりました({transfer.link})。

以上、よろしくお願いいたします。
{cfg:site_name}

{alternative:html}

<p>
    利用者様、
</p>

<p>
   <a href="{transfer.link}">転送番号{transfer.id}</a>は<a href="{cfg:site_url}">{cfg:site_name}</a>から削除されたため、ダウンロードできなくなりました。
</p>

<p>
    以上、よろしくお願いいたします。<br/>
    {cfg:site_name}
</p>