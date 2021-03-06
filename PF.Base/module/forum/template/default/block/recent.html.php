{if $type == 'posts'}
	{foreach from=$threads item=post}
	<article class="forum_mini_post">
		<div class="_i">
			{img user=$post suffix='_50_square' max_width=32 max_height=32}
		</div>
		<div class="_u">
			{if $post.cache_name}
				<span class="user_profile_link_span"><a href="#">{$post.cache_name|clean}</a></span>
			{else}
				{$post|user}
			{/if}
		</div>
		<h1><a href="{permalink module='forum.thread' title=$post.thread_title id=$post.thread_id}">{$post.thread_title|clean}</a></h1>
		<div class="_c">
			{$post.text_parsed|parse}
		</div>
		<time>
			{$post.time_stamp|convert_time}
		</time>
	</article>
	{/foreach}
{else}
	{foreach from=$threads item=aThread}
		{template file='forum.block.thread-entry'}
	{/foreach}
{/if}