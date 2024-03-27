
const  {GENESIS_DATA} =require("./config.js")
class Block{
constructor({timestamp,prehash,hash,data}){
        this.timestamp=timestamp;
        this.prevHash=prehash;
        this.Hash=hash;
        this.data=data;
       
    }
   
    static genesis(){
        return new this (GENESIS_DATA);
    }
}

const block1=new Block({timestamp:"2/12/04",prehash:"0abc",hash:"00xabc",data:"hello"});
const genesis=Block.genesis();
console.log(genesis);
//Genesis Block
