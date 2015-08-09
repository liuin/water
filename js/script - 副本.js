//头部inc
var pageHeader = avalon.define({
  $id: 'pageHeader',
  url: 'inc/header.html',
  arry1:[
    {url:'#1',name:'水汇网收藏'},
    {url:'login.html',name:'登陆'},
    {url:'reg.html',name:'注册'}
  ],
  arry2:[
    {url:'#1',name:'我的订单',icon:'glyphicon-pencil'},
    {url:'#',name:'我是商家',icon:'glyphicon-user'},
    {url:'#',name:'联系客服',icon:'glyphicon-heart'},
    {url:'#',name:'更多',icon:'glyphicon-asterisk'}
  ]
})

//底部inc
var pageFooter = avalon.define({
  $id: 'pageFooter',
  url: 'inc/footer.html'
})

//中间目录
var navPils = avalon.define({
  $id: 'navPils',
  url: 'inc/nav-pills.html'
})

//个人中心
var personNav = avalon.define({
  $id: 'personNav',
  url: 'inc/person-nav.html'
})

//个人中心-我的账户
var personNavZh = avalon.define({
  $id: 'personNavZh',
  url: 'inc/person-nav-zh.html',
  activeTxt: ''
})


//个人中心-我的账户-账户设置
var personSet = avalon.define({
  $id: 'personSet',
  emai:'20893791@qq.com',
  emailState:true,
  name:'刘旭',
  openchange:function  (str) {
    if ($('.' + str).is(':visible')) {
      return $('.' + str).hide();
    }

    $('.section-form').hide();
    $('.' + str).show();
  }

})

