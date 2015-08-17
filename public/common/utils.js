var $bgBox;
var timerWaiting;
var waitingHTML='<table border="0" width="100%" height="100%"><tr><td align=center><div style="width:100px;padding:80px;background-image:url(\'../img/trans50.png\');"><img border="0" alt="Loading..." src="../img/loading.gif"></img></div></td></tr></table>';
function showEBMessage(msg)
{
	
}
function _showWaiting()
{
	if(!$bgBox)
	{
		$bgBox = $('<div />').appendTo('body');
		$bgBox.attr('id', 'waiting');
		$bgBox.attr('style',"position: fixed;top:0px;left:0px; width: 100%; height: 100%; z-index: 1000;color:#fff;display: table;text-align:center;");
	}
	$bgBox.html(waitingHTML);
	$bgBox.show();
}
function showWaiting()
{
	if(timerWaiting) clearTimeout(timerWaiting);
	timerWaiting=setTimeout('_showWaiting()',1000);
}
function hideWaiting()
{
	if(timerWaiting) clearTimeout(timerWaiting);
	if($bgBox) $bgBox.hide();
}
function postRequest(target,variables,completedFunc)
{
    showWaiting();
    $.post(target,variables,function(data){hideWaiting();completedFunc(data);});
}
function zeroFill( number, width )
{
  width -= number.toString().length;
  if ( width > 0 )
  {
    return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
  }
  return number + ""; // always return a string
}