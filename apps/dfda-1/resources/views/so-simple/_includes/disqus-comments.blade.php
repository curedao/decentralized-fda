<?php /** @var \App\Studies\QMStudy $page */ ?>
<?php ($page = $page ?? $post ?? $model ?? $obj ?? $r ?? $v ?? null); ?>
<div class="page-comments">
    <div id="disqus_thread"></div>
    <script>
        var disqus_config = function () {
            this.page.url = '{{ $page->getUrl() }}';
            this.page.identifier = '{{ $page->getUniqueIndexIdsSlug() }}';
        };

        (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://quantimodo.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</div>
