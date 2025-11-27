import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import DashboardCards from "../cards/DashboardCards";
import { BarElement, Chart, LinearScale } from "chart.js";
import { getRelativePosition } from "chart.js/helpers";
import {
    Chart as ChartJS,
    ArcElement,
    Tooltip,
    Legend,
    CategoryScale,
    PointElement,
    LineElement,
    Title,
} from "chart.js";
import { Bar, Line } from "react-chartjs-2";
import swal from "sweetalert";
import {
    Button,
    Paper,
    Rating,
    Table,
    TableBody,
    TableCell,
    TableContainer,
    TableHead,
    TableRow,
    Typography,
} from "@mui/material";
import { api } from "../config/api";

ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    BarElement,
    Title,
    Tooltip,
    Legend
);

const Dashboard = (props) => {
    const userObject = JSON.parse(props.user);
    const [students, setStudents] = useState([])
    const getYearLevel = (yearLevel) => {
        if (yearLevel == 1) {
            return "1st Year";
        } else if (yearLevel == 2) {
            return "2nd Year";
        } else if (yearLevel == 3) {
            return "3rd Year";
        } else {
            return "4th Year";
        }
    };

    const getSemester = (semester) => {
        if (semester == 1) {
            return "1st Semester";
        } else {
            return "2nd Semester";
        }
    };

    const getNextSubjects = () => {
        let yearLevel = Number(userObject.year_level);
        let semester = Number(userObject.semester);
        if (semester == 2) {
            yearLevel += 1;
        } else {
            semester += 1;
        }
        let nextSubjects = `${getYearLevel(yearLevel)} - ${getSemester(
            semester
        )}`;
        return nextSubjects;
    };

    const [dashboardData, setDashboardData] = useState([]);
    const [productsData, setProductsData] = useState([]);
    const [monthlyLabel, setMonthlyLabel] = useState([]);
    const [monthlyData, setMonthlyData] = useState([]);
    const [subjects, setSubjects] = useState([]);
    const [nextSubjects, setNextSubject] = useState([]);

    const [salesReports, setSalesReports] = useState([]);
    const [salesData, setSalesData] = useState([]);
    const [salesLabel, setSalesLabel] = useState([]);

    // useEffect(() => {
    //     if (userObject.user_role == 3 && userObject.profile == null) {
    //         swal({
    //             icon: "warning",
    //             title: "Redirecting...",
    //             text: "You will be redirected to complete your profile!",
    //         }).then((response) => {
    //             location.replace("/customerpoll");
    //         });
    //     } else if (userObject.user_role == 3) {
    //         swal({
    //             icon: "warning",
    //             title: "Redirecting...",
    //             text: "You will be redirected for shopping!",
    //         }).then((response) => {
    //             location.replace("/shopping");
    //         });
    //     } else {
    //         console.log("not customer :D");
    //         console.log(userObject.profile == null);
    //     }
    // }, []);

    useEffect(() => {
        api.get("/dashboard")
            .then((response) => {
                console.log(response.data.monthlyVisitor);
                const visitors = response.data.monthlyVisitor;
                visitors.map((item) => {
                    let tempLabel = [];
                    tempLabel.push(item.month);

                    let tempData = [];
                    tempData.push(item.visitor_count);

                    setMonthlyData(tempData);
                    setMonthlyLabel(tempLabel);
                });
                setDashboardData(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });
        api.get("shopping/getbestsellers")
            .then((response) => {
                console.log(response.data);
                setProductsData(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });

        api.get("reportsmanagement/getsalesreports")
            .then((response) => {
                console.log(response.data.monthly);
                const monthly = response.data.monthly;
                let data = [];
                let label = [];
                monthly.map((item) => {
                    data.push(item.total_sales);
                    label.push(item.month);
                });
                setSalesData(data);
                setSalesLabel(label);
            })
            .catch((err) => {
                console.log(err.response);
            });

        api.post("getusersubjects", {
            semester: userObject.semester,
            year_level: userObject.year_level,
        })
            .then((response) => {
                setSubjects(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });

        api.post("getnextsubjects", {
            semester: userObject.semester,
            year_level: userObject.year_level,
        })
            .then((response) => {
                setNextSubject(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });

        api.get("getallstudents")
            .then((response) => {
                console.log("students")
                console.log(response.data)
                setStudents(response.data);
            })
            .catch((err) => {
                console.log(err.response);
            });
    }, []);

    const passStudent = (id) => {
        api.post('passStudent', {
            id: id
        }).then((response) => {
            location.reload()
        }).catch(err => {
            console.log(err.response)
        })
    }

    const salesOptions = {
        plugins: {
            legend: {
                position: "top",
            },
            title: {
                display: true,
                text: "Monthly Sales",
            },
        },
    };

    const salesDatas = {
        labels: salesLabel,
        datasets: [
            {
                label: "Count",
                data: salesData,
                fill: false,
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)",
                ],
            },
        ],
    };

    const data = {
        labels: monthlyLabel,
        datasets: [
            {
                label: "Count",
                data: monthlyData,
                fill: false,
                borderColor: "rgb(75, 192, 192)",
            },
        ],
    };

    const options = {
        plugins: {
            legend: {
                position: "top",
            },
            title: {
                display: true,
                text: "Visitors",
            },
        },
    };
    return (
        <div className="w-full">
            {userObject.user_role == 3 ? (
                <>
                    {userObject.year_level == 1 && (
                        <div className="grid grid-cols-1 gap-5">
                            <div className="col-span-1 px-4">
                                <div className="text-3xl font-bold">
                                    Current Semester (
                                    {getYearLevel(userObject.year_level)} -{" "}
                                    {getSemester(userObject.semester)})
                                </div>
                                {subjects.length > 0 &&
                                    subjects.map((item, index) => {
                                        return (
                                            <div
                                                className="grid grid-cols-5"
                                                key={index}
                                            >
                                                <div className="col-span-1 font-bold text-base">
                                                    {item.subject_code}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    {item.subject_name}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Lec Units -{" "}
                                                    {item.subject_lec_units}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Lab Units -{" "}
                                                    {item.subject_lab_units}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Pre-requisite -{" "}
                                                    {item.subject_prereq}
                                                </div>
                                            </div>
                                        );
                                    })}
                            </div>
                            <div className="col-span-1 px-4">
                                <div className="text-3xl font-bold">
                                    Next Semester ({getNextSubjects()})
                                </div>
                                {nextSubjects.length > 0 &&
                                    nextSubjects.map((item, index) => {
                                        return (
                                            <div
                                                className="grid grid-cols-5"
                                                key={index}
                                            >
                                                <div className="col-span-1 font-bold text-base">
                                                    {item.subject_code}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    {item.subject_name}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Lec Units -{" "}
                                                    {item.subject_lec_units}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Lab Units -{" "}
                                                    {item.subject_lab_units}
                                                </div>
                                                <div className="col-span-1 text-base">
                                                    Pre-requisite -{" "}
                                                    {item.subject_prereq}
                                                </div>
                                            </div>
                                        );
                                    })}
                            </div>
                        </div>
                    )}
                </>
            ) : (
                <div className="flex justify-center items-center w-full">
                    <TableContainer component={Paper}>
                        <Table sx={{ minWidth: 650 }} aria-label="simple table">
                            <TableHead>
                                <TableRow>
                                    <TableCell>
                                        Student Name
                                    </TableCell>
                                    <TableCell align="right">
                                        Year Level
                                    </TableCell>
                                    <TableCell align="right">
                                        Semester
                                    </TableCell>
                                    <TableCell align="right">
                                        Email
                                    </TableCell>
                                    <TableCell align="right">
                                        Action
                                    </TableCell>
                                </TableRow>
                            </TableHead>
                            <TableBody>
                                {students.length > 0 && students.map((row) => (
                                    <TableRow
                                        key={row.name}
                                        sx={{
                                            "&:last-child td, &:last-child th":
                                                { border: 0 },
                                        }}
                                    >
                                        <TableCell component="th" scope="row">
                                            {row.name}
                                        </TableCell>
                                        <TableCell align="right">
                                            {row.year_level}
                                        </TableCell>
                                        <TableCell align="right">
                                            {row.semester}
                                        </TableCell>
                                        <TableCell align="right">
                                            {row.email}
                                        </TableCell>
                                        <TableCell align="right">
                                            {!(row.year_level == 4 && row.semester == 2) && (
                                                <Button variant="contained" onClick={() => passStudent(row.id)}>
                                                    Pass
                                                </Button>
                                            )}
                                        </TableCell>
                                    </TableRow>
                                ))}
                            </TableBody>
                        </Table>
                    </TableContainer>
                </div>
            )}
        </div>
    );
};

export default Dashboard;

if (document.getElementById("Dashboard")) {
    const element = document.getElementById("Dashboard");
    const props = Object.assign({}, element.dataset);
    ReactDOM.render(
        <Dashboard {...props} />,
        document.getElementById("Dashboard")
    );
}
