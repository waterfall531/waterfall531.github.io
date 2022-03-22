# study

1. react
    
    1. uniswap-interface
    2. useMemo
        1. 減少Render次數 增加效能
    
2. web 3
    1. 錢包連線

3. Smart Contracts
    1. solidity

    2. ```solidity
        function swap(uint amount0Out, uint amount1Out, address to, bytes calldata data) external lock {
                require(amount0Out > 0 || amount1Out > 0, 'UniswapV2: INSUFFICIENT_OUTPUT_AMOUNT');
                //匯出金額為零時,錯誤
                (uint112 _reserve0, uint112 _reserve1,) = getReserves(); // gas savings
                require(amount0Out < _reserve0 && amount1Out < _reserve1, 'UniswapV2: INSUFFICIENT_LIQUIDITY');
        		//匯出小於匯入
        		//方向異常時,錯誤
        		//100 < 0 && 0 < 1
        		
                uint balance0;
                uint balance1;
                { // scope for _token{0,1}, avoids stack too deep errors
                address _token0 = token0;
                address _token1 = token1;
                require(to != _token0 && to != _token1, 'UniswapV2: INVALID_TO');
                if (amount0Out > 0) _safeTransfer(_token0, to, amount0Out); // optimistically transfer tokens
                if (amount1Out > 0) _safeTransfer(_token1, to, amount1Out); // optimistically transfer tokens
                if (data.length > 0) IUniswapV2Callee(to).uniswapV2Call(msg.sender, amount0Out, amount1Out, data);
                balance0 = IERC20(_token0).balanceOf(address(this));
                balance1 = IERC20(_token1).balanceOf(address(this));
                }
                uint amount0In = balance0 > _reserve0 - amount0Out ? balance0 - (_reserve0 - amount0Out) : 0;
                uint amount1In = balance1 > _reserve1 - amount1Out ? balance1 - (_reserve1 - amount1Out) : 0;
                require(amount0In > 0 || amount1In > 0, 'UniswapV2: INSUFFICIENT_INPUT_AMOUNT');
                { // scope for reserve{0,1}Adjusted, avoids stack too deep errors
                uint balance0Adjusted = balance0.mul(1000).sub(amount0In.mul(3));
                uint balance1Adjusted = balance1.mul(1000).sub(amount1In.mul(3));
                require(balance0Adjusted.mul(balance1Adjusted) >= uint(_reserve0).mul(_reserve1).mul(1000**2), 'UniswapV2: K');
                }
        
                _update(balance0, balance1, _reserve0, _reserve1);
                emit Swap(msg.sender, amount0In, amount1In, amount0Out, amount1Out, to);
            }
        ```

    1. 

4. [Terra](https://www.terra.money/)

    1. Luna

5. [Solana](https://solana.com/zh)

    1. SOL

6. [Polygon](https://bshare.io/knowledge/%E7%94%9F%E6%85%8B%E4%BB%8B%E7%B4%B9/polygon_intro/)

    1. Matic

7. [APY](https://docs.google.com/spreadsheets/d/10Om7ww0gdFPFeBz3YvxeGuxjC0oXj19QLNa8F8S4fL8/edit#gid=0)

    1. [AAX](https://aax.com)
        1. 交易所
    2. [ANC](https://app.anchorprotocol.com/ANC)
        1. [docs](https://bshare.io/uncategorized/anchor_protocol/)
        1. [docs](https://coocolab.com/anchor-protocol/)
    3. [YFI](https://yearn.finance/#/home)
    4. [Compound](https://compound.finance/markets)
        1. Defi應用
    5. [AAVE]()

8. GameFi

    1. [STEPN](https://zombit.info/what-is-stepn/)
    2. https://stepn.com/

9. ERC

    1. ERC-20
        1. 可替代
        2. 可分割
        3. 每顆一樣

    2. ERC-721
        1. 不可替代
        2. 不可分割

    3. ERC-1155
        1. 結合上面兩者

10. 鏈
    11. |           | 每秒可完成交易數量(TPS) | 共識演算法 |
        | --------- | ----------------------- | ---------- |
        | Ethereum  | 15                      | PoW        |
        | Polygon   | 65000                   | PoS        |
        | Solana    | 65000                   | PoH && PoS |
        | Avalanche | 4500                    | DAG        |



## Defi

- Dexes(去中心交易所)
- Lending(借貸)
- Yield(流動性挖礦)
- Insurance
- Options
- Staking



## 實用網站

- [DeFI](https://defillama.com/)

## 術語

- ABI
    - 由於合約上鍊後的source code皆為編譯後的產物
    - 所以需要類似api 文件的方式去了解需要為什麼參數



### password

- metamask
    - for test
        - gold genius paddle gap match large iron right scorpion will harvest wreck
        - 6.ph'JbZstJe*%A/
- TerraStation
    - for test
        - dwarf key pull burden lobster wash want maid civil guess fog easily poverty celery make ankle observe pioneer garment humor bachelor doctor pipe off
        - 6.ph'JbZstJe*%A/
- github
    - BJkQt4b2BHhY6hg   