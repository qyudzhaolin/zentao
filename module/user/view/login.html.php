<?php
/**
 * The html template file of login method of user module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: login.html.php 5084 2013-07-10 01:31:38Z wyd621@gmail.com $
 */
include '../../common/view/header.lite.html.php';
if(empty($config->notMd5Pwd))js::import($jsRoot . 'md5.js');
js::import($jsRoot . 'layer/layer.js');
?>
<style>
.zt-logo-box {
	position:absolute;
	left: 60px;
	bottom: 35px;
}
.zt-logo-box img{height:40px;}
.agreementCheckBox{display:none;}
</style>
<main id="main" class="fade no-padding">
  <div class="container" id="login">
    <div id="loginPanel">
        <div class="zt-logo-box">
        <img src="<?php echo $config->webRoot . 'theme/default/images/main/zt-logo-zt.png';?>" alt="">
        </div>
		
      <header>
        <h2><?php printf($lang->welcome, $app->company->name);?></h2>
        <div class="actions dropdown dropdown-hover" id='langs'>
          <button type='button' class='btn' title='Change Language/更换语言/更換語言'><?php echo $config->langs[$this->app->getClientLang()]; ?> <span class="caret"></span></button>
          <ul class="dropdown-menu pull-right">
            <?php foreach($config->langs as $key => $value):?>
            <li><a class="switch-lang" data-value="<?php echo $key; ?>"><?php echo $value; ?></a></li>
            <?php endforeach;?>
          </ul>
        </div>
      </header>
      <div class="table-row">
        <div class="col-4 text-center" id='logo-box'>
        <img src="<?php echo $config->webRoot . 'theme/default/images/main/zt-logo.png';?>" alt="">
        </div>
        <div class="col-8">
          <form method='post' target='hiddenwin'>
            <table class='table table-form'>
              <tbody>
                <tr>
                  <th><?php echo $lang->user->account;?></th>
                  <td><input class='form-control' type='text' name='account' id='account' autofocus /></td>
                </tr>
                <tr>
                  <th><?php echo $lang->user->password;?></th>
                  <td><input class='form-control' type='password' name='password' /></td>
                </tr>
                <tr>
                  <th></th>
                  <td id="keeplogin">
				  <?php echo html::checkBox('keepLogin', $lang->user->keepLogin, $keepLogin);?>
				  <div class="checkbox-primary agreementCheckBox">
				  <input type="checkbox" name="agreement" value="on" id="agreement" style="width: 50px;"> 
				  <label for="keepLoginon">我已阅读并同意<a href="#" class="agreement" style="color:blue;vertical-align: top;">《员工保密协议》</a></label></div>
				  </td>
                </tr>
                <tr>
                  <td></td>
                  <td class="form-actions">
                  <?php 
                  echo html::submitButton($lang->login, '', 'btn btn-primary');
                  if($app->company->guest) echo html::linkButton($lang->user->asGuest, $this->createLink($config->default->module));
                  echo html::hidden('referer', $referer);
                  echo html::hidden('verifyRand', $rand);
                  echo html::a(inlink('reset'), $lang->user->resetPassword);
                  ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
      <?php if(isset($demoUsers)):?>  
      <footer>
        <span><?php echo $lang->user->loginWithDemoUser;?></span>
        <?php
        $password = md5('123456');
        $link     = inlink('login');
        $link    .= strpos($link, '?') !== false ? '&' : '?';
        foreach($demoUsers as $demoAccount => $demoUser)
        {
            if($demoUser->password != $password) continue;
            echo html::a($link . "account={$demoAccount}&password=" . md5($password . $this->session->rand), $demoUser->realname, 'hiddenwin');
        }
        ?>  
      </footer>  
      <?php endif;?>
    </div>
    <div id="info" class="table-row">
      <div class="table-col text-middle text-center">
        <div id="poweredby">
          <?php if($config->checkVersion):?>
          <?php $siteURL = 'https://api.zentao.net';?>
          <iframe id='updater' class='hidden' frameborder='0' width='100%' scrolling='no' allowtransparency='true' src="<?php echo $siteURL;?>/updater-isLatest-<?php echo $config->version;?>-<?php echo $s;?>.html?lang=<?php echo str_replace('-', '_', $this->app->getClientLang())?>"></iframe>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</main>
<div id="agreementBox" style="display:none;">
    <div style="padding:15px;"><?php echo $agreement?></div>
</div>

<script>
$(function(){
	$('.agreement').click(function(){
		layer.open({
			'title':'员工保密协议',
			type: 1,
			skin: 'layui-layer-rim', //加上边框
			area: ['900px', '500px'], //宽高
			content: $('#agreementBox').html()
		});		
	});
	
	//如果点击过保密协议了，则隐藏
	if( ! $.cookie('readAgreement')){
		$('.agreementCheckBox').show();
		//必须同意员工保密协议
		$('button#submit').click(function(){
			if( ! $('input#agreement').is(':checked')){
				layer.msg('未勾选员工保密协议');
				return false;
			}
			
			//设置点击过记录
			$.cookie('readAgreement', 'yes', { expires: 300 });
		});		
	}
	
});
</script>
<?php include '../../common/view/footer.lite.html.php';?>