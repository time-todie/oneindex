<?php view::layout('layout')?>

<?php view::begin('content');?>
    <div class="mdui-container-fluid">
        <div class="mdui-col-md-6 mdui-col-offset-md-3">
            <center><h4 class="mdui-typo-display-2-opacity">只有绅士知道的世界</h4></center>
            <form action="" method="post">
                <div class="mdui-textfield mdui-textfield-floating-label">
                    <i class="mdui-icon material-icons">https</i>
                    <label class="mdui-textfield-label">秘纹</label>
                    <input name="passcode" class="mdui-textfield-input" type="password"/>
                </div>
                <br>
                <button type="submit" class="mdui-center mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme">
                    <i class="mdui-icon material-icons">fingerprint</i>
                    冲冲冲!
                </button>
            </form>
        </div>

    </div>
<?php view::end('content');?>