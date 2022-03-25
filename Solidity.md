# 合約

1. memory，storage和calldata
    1. [link](https://www.cnblogs.com/wanghui-garcia/p/9587937.html)
2. uint
    1. unsing Integer
3. msg.sender
    1. 合約發起人
4. function _*function name*_ (string private _name) private view returns (uint){}
    1. private 要加前置底線
    2. Private 就是合約內才能call 但後面加上view 就變成可以看
5. Interface
    1. 不需要function內容
    2. 可以call 外部合約
    3. Returns 可以知道回傳的values
    4. 使用時init 合約
        1. KittyInterface(kittyAddress);
6. Save Gas
    1. Gas很貴
    2. 合約內操作也都需要錢
    3. 引申出view function
    4. view 只能看資料like [etherscan](https://etherscan.io/)
    5. 但不能更動數據
    6. 所以可以撰寫出看數據的function
7. 同理更動數據皆需要花錢才能改變
    1. 升級
    2. 數據變化
    3. 外觀變化
    4. 獲得裝備
8. Function type
    1. private
        1. 合約內調用
    2. internal
        1. 除合約外還有被繼承的項目
    3. external
        1. 只能在合約外
    4. public
        1. 任何地方
    5. view
        1. 運行數據但就是只能看
        2. 通过运行函数，不会保存/改变数据
        3. 不花費gas
    6. pure
        1. 函数不仅不会向区块链保存任何数据
        2. 而且也不会从区块链中读取任何数据
        3. 不花費gas
9. msg.sender
    1. 指發出合約請求的人
    2. `zombieToOwner[_tokenId] == msg.sender || zombieApprovals[_tokenId] == msg.sender`
        1. 在這場景下
            1. zombieToOwner 是指 原主人
            2. zombieApprovals 指給予權限之人
    3. 之後在erc721.sol內還有驗證對於from的require
10. oracle的必要性
    1. 合約內部無法獲取外部資訊
    2. 若要交易eth / usd交易對
    3. 那是必須要實時報價
    4. 而外部資訊會讓交易陷入報價錯誤的危機
11. remix
     1. Solidity 版本
     2. 
