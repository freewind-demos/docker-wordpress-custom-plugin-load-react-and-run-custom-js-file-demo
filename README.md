Docker Wordpress Custom Plugin Load Js File in Head Demo
=============================================================

在插件里加载一些js文件，并写一些使用该库的代码。看起来简单，实际上很多坑，需要注意：

1. 通常使用`wp_enqueue_script`这个函数来加载，可以由wordpress来处理依赖及正确的顺序
2. wordpress中内置了一些库，比如可以使用`wp_enqueue_script('query')`直接加载jquery，不需要给出文件url
3. 如果想写一些js代码，需要用`wp_add_inline_script`来处理依赖关系，直接用`add_action('wp_footer', 'codeFn')`不靠谱，因为wordpress可能会把我们需要的库的加载也放到footer里
4. 对于`lodash`非常奇怪
   1. 如果我们使用`wp_enqueue_script('lodash')`，这样不行，wordpress没有提供url
   2. 如果我们使用`wp_enqueue_script('lodash', 'http://...')`，wordpress会把它放在footer的位置，而不是`<head>`，并且后面会增加一句`window.lodash = $_.noConflict()`
   3. 它还会将我们放在`wp_add_inline_script`里的代码，放在`window.lodash = $_.noConflict()`这句之前
   4. 最后我只能使用一个非`lodash`的名字，就一切正常，会放在`<head>`里

```
npm run up
```

Admin登录地址： <http://localhost:20080/wp-admin>

```
freewind
123456
```

## Build Plugin

```
npm run build-plugin
```

将生成`dist/plugin.zip`

然后在wordpress后台，将该plugin上传并启用。之后打开页面看效果

