<li>
			<a class="kaixin" href="http://www.kaixin001.com/repaste/share.php?rurl=<?php echo $this->_var['deal']['share_url']; ?>&rcontent=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['brief'],
);
echo $k['name']($k['value']);
?>&rtitle=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['name'],
);
echo $k['name']($k['value']);
?>" target=_blank>开心</a>
</li>
<li>
			<a class="renren" href="http://share.renren.com/share/buttonshare.do?link=<?php echo $this->_var['deal']['share_url']; ?>&title=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['name'],
);
echo $k['name']($k['value']);
?>" target=_blank>人人</a>
</li>
<li>
			<a class="douban" href="http://www.douban.com/recommend/?url=<?php echo $this->_var['deal']['share_url']; ?>&title=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['name'],
);
echo $k['name']($k['value']);
?>&comment=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['brief'],
);
echo $k['name']($k['value']);
?>" target=_blank>豆瓣</a>
</li>
<li>
			<a class="sina" href="http://v.t.sina.com.cn/share/share.php?url=<?php echo $this->_var['deal']['share_url']; ?>&title=<?php 
$k = array (
  'name' => 'urlencode',
  'value' => $this->_var['deal']['name'],
);
echo $k['name']($k['value']);
?>" target=_blank>新浪微博</a>
</li>
<li>
			<a id="deal-buy-mailto" class="email" href="mailto:?subject=<?php echo urlencode(iconv("utf-8","gbk",$this->_var['deal']['name']));?>&body=<?php echo urlencode(iconv("utf-8","gbk","你好，发现一个新的团购网站：".$this->_var['deal']['share_url']));?>">邮件</a>
</li>