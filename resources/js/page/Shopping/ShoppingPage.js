import { Button, Rating, Typography } from "@mui/material";
import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import CustomShoppingCard from "../../components/shopping/CustomShoppingCard";
import { api } from "../../config/api";

const ShoppingPage = (props) => {
    const userObject = props.user == undefined ? null : JSON.parse(props.user)
    const [products, setProducts] = useState([]);
    const [bestProducts, setBestProducts] = useState([]);

    useEffect(() => {
        console.log(JSON.parse(props.image));
        if (userObject == null) {
            api.get("shopping/getthreeproducts")
                .then((response) => {
                    setProducts(response.data);
                })
                .catch((err) => {
                    console.log(err.response);
                });
        } else {
            if (userObject.user_role == 1) {
                location.href = 'home'
            }
            api.post('recommenditems', {
                user_id: userObject.id 
            }).then((response) => {
                setProducts(response.data)
                console.log(response.data)
            }).catch(err => {
                console.log(err.response)
            })
        }

        api.get("shopping/getbestsellers")
            .then((response) => {
                setBestProducts(response.data);
                console.log(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });

    }, []);
    return (
        <div className="w-full">
            <div
              className="relative w-full h-[85vh] bg-no-repeat bg-cover bg-center bg-fixed"
              style={{
                backgroundImage: `url(${JSON.parse(props.image)[0]})`,
              }}
            >
              {/* Dark overlay */}
              <div className="absolute inset-0 bg-black/50"></div>
            
              {/* Content */}
              <div className="relative z-10 flex justify-center items-center flex-col h-full text-white text-center">
                <div className="text-9xl font-bold leading-tight">LEARN</div>
                <div className="text-9xl font-bold leading-tight">GROW</div>
                <div className="text-9xl font-bold leading-tight">ACHIEVE</div>
                <div className="my-10">
                  <Button
                    variant="contained"
                    sx={{
                      backgroundColor: "#000",
                      color: "#fff",
                      fontWeight: 700,
                      fontSize: 20,
                      px: 3,
                      "&:hover": {
                        backgroundColor: "#222",
                      },
                    }}
                  >
                    ENROLL NOW
                  </Button>
                </div>
              </div>
            </div>

            <div className="mx-10 my-12 py-16 border-y-4 border-black">
                <div className="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8">
                    <div className="col-span-1">
                        <div className="flex justify-center items-center flex-col space-y-7">
                            <img src={JSON.parse(props.image)[3]} height={125} width={125} />
                            <Typography variant="h4" fontWeight={700}>FAST ENROLLMENT</Typography>
                            <Typography variant="h6" fontWeight={400} textAlign={'center'}>Quick, easy, and hassle-free. <br /> Register for your courses in just a few clicks.</Typography>
                        </div>
                    </div>
                    <div className="col-span-1">
                        <div className="flex justify-center items-center flex-col space-y-7">
                            <img src={JSON.parse(props.image)[4]} height={125} width={125} />
                            <Typography variant="h4" fontWeight={700}>TRACK YOUR SUBJECTS</Typography>
                            <Typography variant="h6" fontWeight={400} textAlign={'center'}>Stay updated with your enrolled subjects, grades, <br /> anytime within the semester.</Typography>
                        </div>
                    </div>
                    <div className="col-span-1">
                        <div className="flex justify-center items-center flex-col space-y-7">
                            <img src={JSON.parse(props.image)[5]} height={125} width={125} />
                            <Typography variant="h4" fontWeight={700}>ONLINE PAYMENT</Typography>
                            <Typography variant="h6" fontWeight={400} textAlign={'center'}>Pay tuition and fees securely via kiosk, <br /> with your preferred payment method.</Typography>
                        </div>
                    </div>
                </div>
            </div>

            <div className="mx-10 my-12">
                {/* <Typography textAlign={'center'} fontWeight={700} variant="h4">Don't take our word for it? See what others are saying</Typography> */}
            </div>
        </div>
    );
};

export default ShoppingPage;

if (document.getElementById("ShoppingPage")) {
    const element = document.getElementById("ShoppingPage");
    const props = Object.assign({}, element.dataset);
    ReactDOM.render(
        <ShoppingPage {...props} />,
        document.getElementById("ShoppingPage")
    );
}
