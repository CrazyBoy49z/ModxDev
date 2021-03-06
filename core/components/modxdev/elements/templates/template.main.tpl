[[$tpl.header]]
    <div class="container">
        [[$tpl.crumbs]]
        <div id="content" class="inner">
            <h3>[[*pagetitle]]</h3>
            [[*content]]
            [[!pdoPage?
            &element=`pdoResources`
            &parents=`0`
            &useWeblinkUrl=`1`
            &tpl=`@INLINE <p>[[+idx]]. <a href="[[+link]]">[[+pagetitle]]</a></p>`
            &tplPageWrapper=`@INLINE <ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul>`
            ]]

            [[!+page.nav]]
        </div>
    </div>
[[$tpl.footer]]