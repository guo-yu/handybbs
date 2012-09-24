seajs.config({
  alias: {
  	// libs
  	'jq' : './lib/jquery.min',
  	'less': './less/less-1.3.0.min', // LESS
  	'd3':'./lib/d3.v2', // 数据驱动svg的脚本库
  	'cufon':'./lib/cufon-yui', // 使用更好的字体
  	'tpl':'./lib/mustache', // 一个js模板引擎
  	// plugins
  	'mas':'./plugins/jquery.masonry.min',
  	'bgi' : './plugins/jquery.backstretch.min',
  	'tiptip' : './plugins/tiptip/jquery.tiptip.min',
  	'mp3' : './plugins/audiojs/audio.min',
  	'fancybox' : './plugins/fancybox/jquery.fancybox-1.3.4.pack',
  	'placeholder':'./plugins/jquery.placeholder.min',
  	// tomato webdemo frame UI scripts
  	'fuc' : './function',
  	// custom scripts
  	'cus' : './custom'
  }
});
define(function(require) {
	require('cus');
});