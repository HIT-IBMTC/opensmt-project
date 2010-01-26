<?php /* Smarty version 2.6.26, created on 2026-06-10 20:46:28
         compiled from element/lun.html */ ?>
<div class="admin-panel-wrap">
    <div class="icon32 icon-options-general">
        <br/>
    </div>
    <div class="admin-panel-wrap">
        <h2>LUN List</h2>
        <?php if ($this->_tpl_vars['execMessage']): ?>
        <div id="execMessage" class="updated fade" style="background-color: rgb(255, 251, 204);">
            <?php unset($this->_sections['line']);
$this->_sections['line']['name'] = 'line';
$this->_sections['line']['loop'] = is_array($_loop=$this->_tpl_vars['execMessage']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['line']['show'] = true;
$this->_sections['line']['max'] = $this->_sections['line']['loop'];
$this->_sections['line']['step'] = 1;
$this->_sections['line']['start'] = $this->_sections['line']['step'] > 0 ? 0 : $this->_sections['line']['loop']-1;
if ($this->_sections['line']['show']) {
    $this->_sections['line']['total'] = $this->_sections['line']['loop'];
    if ($this->_sections['line']['total'] == 0)
        $this->_sections['line']['show'] = false;
} else
    $this->_sections['line']['total'] = 0;
if ($this->_sections['line']['show']):

            for ($this->_sections['line']['index'] = $this->_sections['line']['start'], $this->_sections['line']['iteration'] = 1;
                 $this->_sections['line']['iteration'] <= $this->_sections['line']['total'];
                 $this->_sections['line']['index'] += $this->_sections['line']['step'], $this->_sections['line']['iteration']++):
$this->_sections['line']['rownum'] = $this->_sections['line']['iteration'];
$this->_sections['line']['index_prev'] = $this->_sections['line']['index'] - $this->_sections['line']['step'];
$this->_sections['line']['index_next'] = $this->_sections['line']['index'] + $this->_sections['line']['step'];
$this->_sections['line']['first']      = ($this->_sections['line']['iteration'] == 1);
$this->_sections['line']['last']       = ($this->_sections['line']['iteration'] == $this->_sections['line']['total']);
?>
            <p>
                <strong><?php echo $this->_tpl_vars['execMessage'][$this->_sections['line']['index']]; ?>
</strong>
            </p>
            <?php endfor; endif; ?>
        </div>
        <?php else: ?>
        <?php endif; ?>
        <form class="posts-filter" action="editlun" method="post" id="lun">
            <table class="widefat post fixed" cellspacing="0">
                <thead>
                    <tr>
                        <th class="manage-column column-title" style="" scope="col" width="35%">GUID</th>
			<th class="manage-column column-author" style="" scope="col">Data Size</th>
			<th class="manage-column column-author" style="" scope="col" width="30%">Source</th>
                        <th class="manage-column column-author" style="" scope="col"></th>
                        <th class="manage-column column-author" style="" scope="col"></th>
                    </tr>
	    	</thead>
		<tbody>
        		<?php $_from = $this->_tpl_vars['myArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
			<tr>
				<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
				<td><?php echo $this->_tpl_vars['col']; ?>
</td>
				<?php endforeach; endif; unset($_from); ?>
				<td>
					<input class="button-secondary action doaction" type="submit" name = "<?php echo $this->_tpl_vars['row'][0]; ?>
" value="Manage" />
	    			</td>
                                <td>
					<input class="button-secondary action doaction" type="submit" name = "<?php echo $this->_tpl_vars['row'][0]; ?>
D" value="Delete" onclick="document.getElementById('lun').action='default'"/>
	    			</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
            </table>

        </form>
        <br/>
        <p>
            It's very Simple to use iSCSI by our openSMT. First, use a ZFS file system to create a LUN here. Then, Add view to it. <br/>
            Create a target if you do not have one in the target page. The setting is all over then.
        </p>
        <form action="createlun" method="post">
        <p class="submit">
            <input class="button-primary" type="submit" value="Add New LUN" name="addlun" />
        </p>
        </form>

    </div>
</div>