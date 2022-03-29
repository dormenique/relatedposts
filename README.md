# Related Posts
#### One way to show your related posts on WordPress, without using a plugin. Made for https://osprofanos.com

At the end of the page, it will display 4 related posts.

The category of each one, is not so specific, than I use a PHP code to always get the fist tag, other then the category posts.

`$first_tag = $tags[0]->term_id;`

But only if it has them

` if( $my_query->have_posts() ) {
            echo '<div id="related_posts" class="clear"><h3>Posts Relacionados</h3><ul class="related_posts_container">';`
            
They asked me if I could display these related posts in a more organized way, specialy with the mobile version. So, for the style, I called an `object-fit: cover;` on each cover img, following by this grid template, so the posts would respect the rule `grid-template: auto/repeat(auto-fit,minmax(180px,2fr));`

### Desktop

![image](https://user-images.githubusercontent.com/70597850/160594939-ced3ffde-18c2-48dd-b2ea-ed9ae9651ebb.png)

### Mobile

![image](https://user-images.githubusercontent.com/70597850/160596829-774daf54-c94f-4ad4-8cbc-6f2cf2b45fd0.png)

That's it!
