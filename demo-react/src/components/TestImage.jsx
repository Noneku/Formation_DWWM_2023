import React from 'react'
import Ours from '../images/ours.png'

const TestImage = () => {
    return(

        <div>
            <img src="./images/ours.png" alt="" />

            <img src={Ours} alt="ours polaire import" />
        </div>
    )
}

export default TestImage