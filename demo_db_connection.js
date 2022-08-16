const mysql = require("mysql");

const conn = mysql.createConnection({
    host:"localhost",
    user:"root",
    database:"orionposts",
    password:""
});

conn.connect(err => {
    if(err){
        console.log(err);
    }else{
        console.log("Database connected!");
    }
});

conn.query(query,(err,result,field) => {
    let query = "select `id`,`headlineEn`,`posttextEn` from `posts`;"
    console.log(err);
    // console.log(result[1]['id']);
    // let resultcode = result;
    var idarray = new Array;
    var headlineEnarray = new Array;
    var posttextEnarray = new Array;
    let i = 0;
    for(i;i<3;i++){
        idarray.push(result[i]['id']);
        headlineEnarray.push(result[i]['headlineEn']);
        posttextEnarray.push(result[i]['posttextEn']);
        console.log(idarray[i],headlineEnarray[i],posttextEnarray[i]);
    }
});

conn.end( err => {
    if (err) {
        console.log(err);
        return err;
    }else{
        console.log('Database ----- closed');
    }
});