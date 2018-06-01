function EventListener (target){
    var _target       = target;
    var _listenerList = {};
    
    this.addEventListener      = function (context, listener, type){
        var listenerList = _listenerList [type];
        if (null == listenerList){
            listenerList = [];
        }
        
        var length = listenerList.length;
        var data;
        var areEqual;
        for (var index = 0; index < length; index++){
            data = listenerList [index];
            areEqual = data.context == context && data.listener == listener;
            if (areEqual){
                //Early return
                return
                }
            }
            data = {
                context: context
                ,listener: listener
            }
            
        listenerList.push (data);
        _listenerList [type] = listenerList;
        
    }
    
    this.removeEventListener   = function (context, listener, type){
        var data;
        var listenerList = _listenerList [type];
        var length = listenerList.length;
        var areEqual;
        for (var index = 0; index < length; index ++){
            data = _listenerList [index];
            areEqual = data.context == context && data.listener == listener;
            if (areEqual){
                listenerList.splice (index,1);
            }
        }
    
    }
    
    this.dispatchEventListener = function (event){
        var type = event.type;
        var listenerList = _listenerList[type];
        if (listenerList == null){
            return;
        }
        var data;
        var length = listenerList.length;
        event.target = _target;
        
        for (var index = 0; index < length; index++){
            data = listenerList [index];
            //aca se pega lo que esta dentro del object "data"
            data.listener.apply (data.context,[event]);
        }
    }
}

function test (){
    var _dispatcher = new EventListener (this);
    var onJean = function (event){
        console.log ("jeeeeeenssss");
    }
    _dispatcher.addEventListener (this,onJean,"jean");
    var dispatch = function (type){
        var event = {type:type}
        _dispatcher.dispatchEventListener (event);
    }
    dispatch ("jean");
}

var myTest = new test();