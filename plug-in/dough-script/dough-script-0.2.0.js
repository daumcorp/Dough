(function($){

	
	/*
	 * $.tab
	 * 
	 *  - "data-tab-event" 속성을 가진 .tab_bar 엘리먼트를 대상으로 적용된다.
	 *  - event는 "click"과 "mouseover" 두가지를 지원한다.
	 */
	
	$.fn.tab = function(options){
		var _options = {
			trigger: (options && options.trigger) ? options.trigger : "click"
		};
		this.each(function(){
			var _tab = this;
			this._targetId = [];
			this._eventTrigger = ($(this).attr("data-tab-event")) ? $(this).attr("data-tab-event").toLowerCase() : _options.trigger;
			
			$(this).find("> li > a").each(function(){
				var thisId = $(this).attr("href");
				if(thisId.match(/^#/)){
					var eventHandler = function(e){
						e.preventDefault();
						$(_tab).find("li.on").removeClass("on");
						$(e.target).parents("li").addClass("on");
						$(_tab._targetId.join(", ")).not(thisId).hide();
						$(thisId).show();
					};
					
					switch(_tab._eventTrigger){
						case "click": 
							$(this).click(function(e){
								eventHandler(e);
							});
							break;
						case "mouseover": 
							$(this).mouseover(function(e){
								eventHandler(e);
							});
							$(this).click(function(e){
								e.preventDefault();
							});
							break;
						default:
							break;
					}

					_tab._targetId.push(thisId);
				};
			});
		});
	};
	
	
	/*
	 * $.tip (툴팁 이벤트)
	 * 
	 *  - "data-tip-event"과 title 속성을 가진 모든 엘리먼트에 적용된다.
	 *  - event는 "click"과 "mouseover" 두가지를 지원한다.
	 *  - options : css | trigger
	 */
	$.fn.tip = function(options){
		var _options = {
			css: (options && options.css) ? options.css : null,
			trigger: (options && options.trigger) ? options.trigger : "mouseover"
		};
		this.each(function(i){
			this._tipBox = null;
			this._tipText = $(this).attr("title");
			this._tipRotate = parseInt($(this).attr("data-tip-rotate"));
			this._eventTrigger = ($(this).attr("data-tip-event")) ? $(this).attr("data-tip-event").toLowerCase() : _options.trigger;
			
			this.eventOnHandler = function(e){
				e.preventDefault();
				if(this._tipBox == null){
					var _tipBox = $(document.createElement("span"));
					_tipBox.html(this._tipText).addClass("tip_box");
					if(this._tipRotate){
						_tipBox.css({
							"-webkitTransform": "rotate(" + this._tipRotate + "deg)",
							"-mozTransform": "rotate(" + this._tipRotate + "deg)",
							"-msTransform": "rotate(" + this._tipRotate + "deg)",
							"transform": "rotate(" + this._tipRotate + "deg)",
							"-webkitTransformOrigin": "0 100%",
							"-mozTransformOrigin": "0 100%",
							"-msTransformOrigin": "0 100%",
							"transformOrigin": "0 100%"
						})
					};
					if(_options.css != null){
						_tipBox.css(_options.css);
					};
					
					this._tipBox = _tipBox;
				};
				$(this).removeAttr("title");
				this._tipBox.insertAfter(this).css({
					top: $(this).position().top - this._tipBox.outerHeight(),
					left: $(this).position().left + $(this).outerWidth()
				})
			};
			
			this.eventOffHandler = function(){
				if(this._tipBox != null){
					this._tipBox.remove();
					$(this).attr("title", this._tipText);
				};
			};
			
			switch(this._eventTrigger){
				case "mouseover": 
					$(this).mouseover(function(e){
						this.eventOnHandler(e);
					});
					$(this).mouseout(function(e){
						this.eventOffHandler(e);
					});
					break;
				case "focus": 
					$(this).focus(function(e){
						this.eventOnHandler(e);
					});
					$(this).blur(function(e){
						this.eventOffHandler(e);
					});
					break;
				default:
					break;
			}
		})
	};

	/*
	 * $.pop (팝업이벤트)
	 * 셀렉트된 요소를 css3 transition 애니메이션으로 팝업시킨다.
	 * options - css | callback 
	 */
	$.fn.pop = function(options){
		var _options = {
				css: (options != undefined && options.css) ? options.css : null,
				callback: (options != undefined && options.callback) ? options.callback : null
			},
			_pop = this;
		this._dimmed = function(){
			if(!$("#_popDimmed").length){
				var dimmed = $(document.createElement("div"));
				dimmed.attr("id", "_popDimmed").css({
					"position": "fixed",
					"zIndex": "100",
					"top": "0",
					"left": "0",
					"width": "100%",
					"height": "100%",
					"background": "#000",
					"opacity": "0.5"
				});
				dimmed.insertAfter(this);
				return dimmed;
			}else{
				return $("#_popDimmed");
			}
		};
		
		this._open = function(){
			this._dimmed().show();
			$(this).show();
			
			setTimeout(function(el){
				$(el).css({
					"-webkitTransform": "scale(1)",
					"-mozTransform": "scale(1)",
					"-msTransform": "scale(1)"
				});
				if(_options.css != null){
					$(el).css(_options.css);
				};
			},50, this);
		};
		
		this._close = function(callback){
			$(this).css({
				"-webkitTransform": "scale(0)",
				"-mozTransform": "scale(0)",
				"-msTransform": "scale(0)"
			});
			setTimeout(function(){
				_pop.hide();
				_pop._dimmed().remove();
				if(callback != null){
					callback();
				};
				delete _options.css;
				delete _options.callback;
				
			}, 300);
		};
		
		$(this).css({
			"position": "fixed",
			"zIndex": "11000",
			"top": "50%",
			"left": "50%",
			"border": "none",
			"-webkitTransform": "scale(0)",
			"-mozTransform": "scale(0)",
			"-msTransform": "scale(0)",
			"-webkitTransition": "-webkit-transform 0.3s",
			"-mozTransition": "-moz-transform 0.3s",
			"-msTransition": "-ms-transform 0.3s",
			"margin": "0",
			"marginLeft": ($(this).outerWidth()/2) * -1,
			"marginTop": ($(this).outerHeight()/2) * -1
		});

		this._open();
		
		$(this).find("*[data-pop-close='true']").on("click", {"pop": this}, function(e){
			var e = e || window.event;
			(e.preventDefault) ? e.preventDefault : e.returnValue = false;
			
			var pop = e.data.pop;
			pop._close(_options.callback);
		});
		
	};

	/*
	 * $.initResponsibleNav 
	 * 반응형 CSS 모듈 적용했을 시 작동하는 스크립트입니다.
	 * 화면사이즈가 작아졌을 때 모바일에 적합하게 변경시켜줍니다.
	 */
	$.initResponsibleNav = function(){
		if($("body.responsible .nav_top").length > 0 ){
			var _isNavChanged = false,
				navList = $(".nav_top > ul").eq(0);
			var render = function(callback){
				if($(window).width() < 801 && !_isNavChanged){
					var navListWrapper = navList.wrap("<div id='navListWrapper'/>"),
						widthSum = 0;
					navList.find("> li").each(function(){
						widthSum += $(this).outerWidth();
					});
					navList.width(widthSum + 30);
					if(callback != undefined){
						callback();
					};
					_isNavChanged = true;
				}else if($(window).width() > 801 && _isNavChanged){
					navList.unwrap().width("");
					_isNavChanged = false;
				};
			};
			var findPosition = function(){
				var selectedList = navList.find("> li.on");
				navList.parent().scrollLeft(selectedList.position().left - 50);
			};
			$(window).resize(function(){
				render();
			});
			$(document).ready(function(){
				render(findPosition);
			});
		}
	};
	
	/*
	 * $.initDough (Dough 페이지 이벤트 일괄적용)
	 */
	
	$.initDough = function(){
		$("*[data-tip-event]").tip();
		$(".tab_bar[data-tab-event]").tab();


		
	};
	
	
})(jQuery);

$(document).ready(function(){
	$.initDough();
})
