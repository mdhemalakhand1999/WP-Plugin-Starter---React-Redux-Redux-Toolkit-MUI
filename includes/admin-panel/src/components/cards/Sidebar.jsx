import Button from '@mui/material/Button';
import AddOutlinedIcon from '@mui/icons-material/AddOutlined';
import { useDispatch, useSelector } from 'react-redux';
import { countAction } from '../../store';

const Sidebar = () => {
    const dispatch = useDispatch();
    const {numVal} = useSelector((state) => state.counter)

    const handleIncrement = () => {
        dispatch( countAction.increment() );
    }

    return(
        <>
            <p>Number is: {numVal} </p>
            <Button variant="contained" onClick={handleIncrement} endIcon={<AddOutlinedIcon />}>
                Increment
            </Button>
        </>
    )
}

export default Sidebar;