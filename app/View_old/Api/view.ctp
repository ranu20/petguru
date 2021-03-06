<div class="brands view">
<h2><?php echo __('Brand'); ?></h2>
	<dl>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($brand['Brand'][''], array('controller' => 'brands', 'action' => 'view', $brand['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Name'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['brand_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['updated_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand'), array('action' => 'edit', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brand'), array('action' => 'delete', $brand['Brand']['id']), null, __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Brands'); ?></h3>
	<?php if (!empty($brand['Brand'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Brand Name'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Updated Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($brand['Brand'] as $brand): ?>
		<tr>
			<td><?php echo $brand['brand_id']; ?></td>
			<td><?php echo $brand['brand_name']; ?></td>
			<td><?php echo $brand['deleted']; ?></td>
			<td><?php echo $brand['updated_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'brands', 'action' => 'view', $brand['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'brands', 'action' => 'edit', $brand['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'brands', 'action' => 'delete', $brand['id']), null, __('Are you sure you want to delete # %s?', $brand['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($brand['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Product Name'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Updated Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($brand['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['product_id']; ?></td>
			<td><?php echo $product['product_name']; ?></td>
			<td><?php echo $product['brand_id']; ?></td>
			<td><?php echo $product['deleted']; ?></td>
			<td><?php echo $product['updated_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
