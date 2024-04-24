

class datalist {

    id;
    url;
    file;
    value;
    desc;
    ArrayJson;
   
    constructor(id,url,file,ArrayJson) {
      this.id = id;
      this.url = url;
      this.file = file;
      this.ArrayJsonv = ArrayJson;
   }

    static AppendDataList(){
        const path = this.url + this.file;
      $.getJSON(path, function(data) {
         $(data.this.ArrayJson).each(function(obj) {
          let itenList = "<option value=\"" + data.this.ArrayJson[obj][this.value] + "\">\"" + data.this.ArrayJson[obj][this.desc].toUpperCase() + "\"</option>";
          $(id).append(orgao);

         })
      })
    }

 
  

}

