<?php /* Smarty version 2.6.26, created on 2026-06-11 12:03:22
         compiled from element/process.html */ ?>
<div class="admin-panel-wrap">
    <div class=" icon-link-manager icon32">
        <br/>
    </div>
    <h2>process</h2>
    <div class="metabox-holder poststuff">
        <form method="post" action="post.php" onsubmit="return false;">
            <div class="postbox">
                        <div class="handlediv" title="显示/隐藏">
                            <br/>
                        </div>
                        <h3 class="hndle">
                            <span>process</span>
                        </h3>
                        <div class="inside">
                            <div class="inside-body">
                                <pre id="systemInfoText"><?php echo $this->_tpl_vars['systemInfoText']; ?>
</pre>
                            </div>
                        </div>
                    </div>
            <div class="clear"></div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function processload() {
        var myHTMLRequest = new Request.HTML({
            onComplete: function(responseTree, responseElements, responseHTML, responseJavaScript){
                $('systemInfoText').set('html',responseHTML);
            }
        }).get('<?php echo $this->_tpl_vars['webUrl']; ?>
/status/process/default/type/ajax');
    }
    processload.periodical(2000);

</script>