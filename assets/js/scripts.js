$(function(){var frameX,desktop=$("#desktop"),frame=$("#iframe"),editor=$(".editor"),menu_file=($(".action-buttons"),$(".file-menu a")),editor_title=$(".editor-header .title .file"),line=$(".row");desktop.length?($.frameLoad=function(){setTimeout(function(){frameX=frame.contents(),editor.add(frameX).on("click",function(e){editor.removeClass("passive"),e.stopPropagation()})},1e3)},desktop.on("click",function(){editor.addClass("passive")}),editor.find(".a").on("click",function(){editor.addClass("close"),setTimeout(function(){editor.removeClass("close")},4e3)}),editor.find(".b").on("click",function(){editor.toggleClass("min")}),editor.find(".c").on("click",function(){editor.toggleClass("full")}),menu_file.on("click",function(){var _this=$(this);editor_title.html(_this.html()),menu_file.removeClass("active"),_this.addClass("active")})):line.on("click",function(){line.removeClass("active"),$(this).addClass("active")})});