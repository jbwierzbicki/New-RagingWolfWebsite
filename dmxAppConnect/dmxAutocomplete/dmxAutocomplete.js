/*!
 DMXzone Autocomplete
 Version: 1.0.2
 (c) 2020 DMXzone.com
 @build 2020-02-27 17:22:51
 */
dmx.Component("autocomplete",{extends:"input",initialData:{selectedItem:null},attributes:{data:{type:Array,default:[]},matchcase:{type:Boolean,default:!1},matchstart:{type:Boolean,default:!1},matchaccent:{type:Boolean,default:!1},optiontext:{type:String,default:"$value"},optionvalue:{type:String,default:"$value"},noresultslabel:{type:String,default:"No Results..."}},render:function(t){dmx.BaseComponent.prototype.render.call(this,t),this.dataItems=[],this.props.value?this.updateValue=!0:this.props.value=this.$node.value,this.$node.disabled=this.props.disabled,this.input=this.$node.cloneNode(),this.input.removeAttribute("id"),this.input.removeAttribute("name"),this.input.setAttribute("autocomplete","off"),this.input.setAttribute("form","dummy"),this.input.addEventListener("blur",this.onBlur.bind(this)),this.input.addEventListener("input",this.onInput.bind(this)),this.input.addEventListener("keydown",this.onKeydown.bind(this)),this.list=document.createElement("div"),this.list.setAttribute("class","dmx-autocomplete-items"),this.$node.style.display="none",this.$node.addEventListener("change",this.updateData.bind(this)),this.$node.addEventListener("invalid",this.updateData.bind(this)),this.update({})},mounted:function(){this.$node.parentNode.insertBefore(this.input,this.$node),this.$node.form&&this.$node.form.addEventListener("reset",this.onReset.bind(this))},update:function(t){JSON.stringify(this.props.data)==JSON.stringify(t.data)&&this.props.optiontext==t.optiontext&&this.props.optionvalue==t.optionvalue||(this.dataItems=dmx.repeatItems(this.props.data).map(function(t,e){return{index:e,value:dmx.parse(this.props.optionvalue,dmx.DataScope(t,this)),label:dmx.parse(this.props.optiontext,dmx.DataScope(t,this)),item:t}},this),this.updateValue=!0),this.props.value!=t.value&&(this.updateValue=!0),this.props.disabled!=t.disabled&&(this.$node.disabled=this.props.disabled,this.input.disabled=this.props.disabled),this.updateData()},updated:function(){this.updateValue&&(this.updateValue=!1,this.setValue(this.props.value,!0),this.updateData())},updateData:function(t){dmx.Component("form-element").prototype.updateData.call(this,t);var e=this.dataItems.find(function(t){return t.value==this.$node.value},this);this.set("selectedItem",e?e.item:null)},setValue:function(e,t){var i=this.dataItems.find(function(t){return t.value==e},this);this.$node.value=i?i.value:"",this.input.value=i?i.label:"",t&&(this.$node.defaultValue=i?i.value:"",this.input.defaultValue=i?i.label:"")},focus:function(){this.input.focus()},disable:function(t){this.$node.disabled=!0===t,this.input.disabled=!0===t,this.updateData()},onReset:function(t){this.$node.value=this.$node.defaultValue,this.input.value=this.input.defaultValue},onBlur:function(t){var e=!1;if(this.dataItems)for(var i=0;i<this.dataItems.length;i++)this.dataItems[i].label==this.input.value&&(this.$node.value=this.dataItems[i].value,e=!0);e||(this.input.value="",this.$node.value="");var s=document.createEvent("HTMLEvents");s.initEvent("change",!1,!0),this.$node.dispatchEvent(s),this.closeList()},onInput:function(t){var s=this.$node,n=this.input,e=n.value;this.closeList(),e&&this.dataItems.length&&(this.currentFocus=-1,this.list.innerHTML="",this.dataItems.forEach(function(i){if(this.matches(i.label,e)){var t=document.createElement("div");t.setAttribute("class","dmx-autocomplete-item"),t.innerHTML=this.getItemHtml(i.label,e),t.item=i,t.addEventListener("mousedown",function(t){t.preventDefault(),t.stopPropagation(),s.value=i.value,n.value=i.label,this.closeList();var e=document.createEvent("HTMLEvents");e.initEvent("change",!1,!0),s.dispatchEvent(e)}.bind(this)),this.list.appendChild(t)}},this),this.list.children.length||(this.list.innerHTML='<div class="dmx-autocomplete-item">'+this.props.noresultslabel+"</div>"),this.showList())},onKeydown:function(t){if(40==t.keyCode)t.preventDefault(),this.currentFocus++,this.updateActive(),this.showList();else if(38==t.keyCode)t.preventDefault(),this.currentFocus--,this.updateActive(),this.showList();else if(27==t.keyCode)t.preventDefault(),this.currentFocus=-1,this.closeList();else if(13==t.keyCode&&(t.preventDefault(),-1<this.currentFocus)){var e=this.list.getElementsByTagName("div"),i=document.createEvent("HTMLEvents");i.initEvent("mousedown",!1,!0),e&&e[this.currentFocus].dispatchEvent(i)}},matches:function(t,e){return this.props.matchaccent||(t=this.normalize(t),e=this.normalize(e)),this.props.matchcase||(t=t.toLowerCase(),e=e.toLowerCase()),this.props.matchstart&&(t=t.substring(0,e.length)),-1!=t.indexOf(e)},getItemHtml:function(t,e){var i=this.htmlEncode(t),s=new RegExp((this.props.matchstart?"^":"")+dmx.escapeRegExp(this.htmlEncode(e)),this.props.matchcase?"g":"gi");return i=i.replace(s,function(t){return"<b>"+t+"</b>"})},htmlEncode:function(t){return t=(t=(t=(t=t.replace(/&/g,"&amp;")).replace(/"/g,"&quot;")).replace(/</g,"&lt;")).replace(/>/g,"&gt;")},normalize:function(t){if(t.normalize)return t.normalize("NFD").replace(/[\u0300-\u036f]/g,"");for(var e=t.split(""),i=0;i<e.length;i++){var s=t.charCodeAt(i);192<=s&&s<=383?e[i]=String.fromCharCode("AAAAAAACEEEEIIIIDNOOOOO*OUUUUYIsaaaaaaaceeeeiiii?nooooo/ouuuuy?yAaAaAaCcCcCcCcDdDdEeEeEeEeEeGgGgGgGgHhHhIiIiIiIiIiJjJjKkkLlLlLlLlLlNnNnNnnNnOoOoOoOoRrRrRrSsSsSsSsTtTtTtUuUuUuUuUuUuWwYyYZzZzZzF".charCodeAt(s-192)):127<s&&(e[i]="?")}return e.join("")},updateActive:function(){var t=this.list.getElementsByTagName("div");if(t){this.currentFocus>=t.length&&(this.currentFocus=0),this.currentFocus<0&&(this.currentFocus=t.length-1);for(var e=0;e<t.length;e++)t[e].classList.remove("dmx-autocomplete-active");t[this.currentFocus].classList.add("dmx-autocomplete-active")}},showList:function(){this.input.value&&(this.$node.nextSibling?this.$node.parentNode.insertBefore(this.list,this.$node.nextSibling):this.$node.parentNode.appendChild(this.list))},closeList:function(){this.list.parentNode&&this.list.parentNode.removeChild(this.list)}});
//# sourceMappingURL=../maps/dmxAutocomplete.js.map
