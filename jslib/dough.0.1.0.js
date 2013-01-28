/* 

현재 개발 진행 중.

*/

var DOUGH = {
	components : {
		launch : function(){
			this.tab.init();
			this.popover.init();
			this.popup.init();
			this.scrollFix.init();
		},
		accessory : {
			dimmed : $('<div id="dimmedLayer" class="hide"></div>')
		},
		dump : {
			openedPopup : ""	
		},
		tab : {
			init : function(){
				var tabBars = $("ul[class*='tab_'][data-tab-content]");
				if(tabBars.length){
					tabBars.each(function(i){
						var tab = $(this),
							tabContentWrap = $(tab.attr("data-tab-content")),
							tabContentIds = tab.find("a[href^='#'][href!='#']");
						tabContentIds.each(function(k){
							var targetId = $(this).attr("href"),
								targetEl = tabContentWrap.find(targetId);
							$(this).click(function(e){
								e.preventDefault();
								tab.find("li.on").removeClass("on");
								$(this).parent().addClass("on");
								tabContentWrap.find("> [class!='hide']").addClass("hide");
								targetEl.removeClass("hide");
								DOUGH.components.popover.init({refresh:true});
							});
							!targetEl.hasClass("show") ? targetEl.addClass("hide") : null;
						});
					});
				};
			}
		},
		popover : {
			init : function(option){
				var popoverBtn = $("*[data-popover-event]");
				if(popoverBtn.length){
					popoverBtn.each(function(i){
						var btn = $(this),
							popoverEvent = btn.attr("data-popover-event"),
							popoverContent = $(btn.attr("href")),
							btnPos = btn.position();
//						popoverContent.css({"top":btnPos.top + 16, "left":btnPos.left});
						if(!option || !option.refresh){
							switch (popoverEvent){
								case "click":
									btn.click(function(e){
										e.preventDefault();
										popoverContent.toggle();
									});
									break;
								case "mouseover":
									btn.click(function(e){
										e.preventDefault();
									});
									btn.mouseover(function(){
										popoverContent.show();
									});
									btn.mouseout(function(){
										popoverContent.hide();
									});
									break;
								default :
									break;
							};
						};
					});
				};
			}
		},
		scrollFix : {
			doc : $(document),
			init : function(){
				var stickyEl = $(".scroll_fix");
				if(stickyEl.length){
					stickyEl.each(function(){
						var el = $(this),
							standardPos = el.offset().top;
						DOUGH.components.scrollFix.observeEvent(el, standardPos, el.width());
					});
				};
			},
			observeEvent : function(stick, standardPos, width){
				this.doc.scroll(function(){
					if( ($("body").hasClass("responsible") && $(window).width() > 800) || (!$("body").hasClass("responsible")) ){
						DOUGH.components.scrollFix.pageScrollHandler(stick, standardPos, width);
					};
				});
			},
			pageScrollHandler : function(el, standardPos, width){
				var scrollTopPos = this.doc.scrollTop();
				(scrollTopPos > (standardPos - 100)) ? el.css("width", "").addClass("fixed") : el.css("width", "").removeClass("fixed");
			}
		},
		popup : {
			init : function(){
				var popupBtn = $("*[data-popup-content]");
				if(popupBtn.length){
					this.observeEvent();
					var dimmed = DOUGH.components.accessory.dimmed;
					$('body').append(dimmed);
					popupBtn.each(function(i){
						var btn = $(this),
							popupContent = $(btn.attr("data-popup-content")),
							closeBtn = popupContent.find("*[data-popup-close='true']");
						popupContent.css("margin-top" , -popupContent.innerHeight()/2);
						btn.click(function(e){
							DOUGH.components.popup.popupOpenHandler(popupContent, e);
						});
						closeBtn.each(function(){
							$(this).click(function(e){
								DOUGH.components.popup.popupCloseHandler(popupContent, e);
							});
						});
					});
				};
			},
			observeEvent : function(){
				DOUGH.components.accessory.dimmed.click(function(){
					DOUGH.components.dimmedClickHandler();
				});			
			},
			popupOpenHandler : function(popupContent, e){
				e.preventDefault();
				DOUGH.components.dump.openedPopup = popupContent;
				DOUGH.components.accessory.dimmed.show();
				popupContent.addClass("showPopup");
			},
			popupCloseHandler : function(popupContent, e){
				if(e) e.preventDefault();
				popupContent.addClass("hidePopup");
				setTimeout(function(){
					popupContent.removeClass("showPopup hidePopup");
				},200);
				DOUGH.components.accessory.dimmed.hide();
				DOUGH.components.dump.openedPopup = "";
			}
		},
		dimmedClickHandler : function(){
			var popupContent = DOUGH.components.dump.openedPopup;
			(popupContent != null) ? DOUGH.components.popup.popupCloseHandler(popupContent) : null;
		}
	}
}

window.onload = function(){
	DOUGH.components.launch();
	DOUGH.components.popover.init({refresh:true});

};

if($("body.responsible")){
	window.onresize = function(){
		DOUGH.components.popover.init({refresh:true});
	}
};