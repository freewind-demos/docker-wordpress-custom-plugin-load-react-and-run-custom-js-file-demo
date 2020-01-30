Docker Wordpress Custom Plugin Load React and Run Custom Js File Demo
=======================================================================

引用react相关的库文件，并载入自己的react文件并执行。

注意：如果使用`wp_enqueue_script('react')`和`wp_enqueue_script('react-dom')`，
是自动从wordpress内置的`wp-includes/js/dist/vendor`下面找到相应的react文件

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

