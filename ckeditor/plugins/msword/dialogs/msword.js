CKEDITOR.dialog.add("mswordDialog",function(a){return{title:"MS Word",minWidth:600,minHeight:350,contents:[{id:"tab-basic",label:"Basic Settings",elements:[{type:"html",html:'<div contenteditable="true" id="ckgedit_mswin" style="border: 2px solid #ddd; padding:3px; width:600px; height:350px; overflow:auto; cursor:auto;"> </div>',minWidth:350,minHeight:350},{type:"hbox",height:["18px;"],children:[{type:"html",html:'<span style="font-size: 11pt;">'+a.lang.msword.info+"</span>"}]}]}],onShow:function(){var c=this;geshi_dialog=c;selection=a.getSelection();var d=a.getSelectedHtml(true);if(d){var b=document.getElementById("ckgedit_mswin");b.innerHTML=d}},onOk:function(){var c=document.getElementById("ckgedit_mswin");var b=c.innerHTML;var d=new RegExp("<xml>([^]*)</xml>","gm");b=b.replace(d,function(e,f){return""});var d=new RegExp("<style>([^]*)</style>","gm");b=b.replace(d,function(e,f){return""});b=b.replace(/&lt/gm,"<");b=b.replace(/&gt/mg,">");b=b.replace(/<table\s+class=.*?>/mg,"<table>");b=b.replace(/<table.*?>/mg,"<table>");b=b.replace(/<tr.*?>/mg,"<tr>");b=b.replace(/<td.*?>/mg,"<td>");b=b.replace(/style="[^>]+"/gm,"");b=b.replace(/<h(\d).*?><span.*?>/gm,"<h$1>");b=b.replace(/(<span\s*>)+/gm,"");b=b.replace(/(<\/span>)+/gm,"");b=b.replace(/<tbody>([^]+)<\/tbody>/,function(e){e=e.replace(/<\/p>/mg,"");return e.replace(/<p.*?>/mg,"")});a.insertHtml(b)}}});