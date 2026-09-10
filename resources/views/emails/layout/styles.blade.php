body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f9;
    color: #333333;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
.container {
    max-width: 750px;
    width: 100%;
    margin: 30px auto;
    background-color: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e1e5eb;
}
.header {
    background-color: #0c3a30;
    padding: 30px 40px;
    text-align: center;
}
.header img {
    max-width: 140px;
    height: auto;
    display: inline-block;
}
.header h1 {
    color: #ffffff;
    font-size: 24px;
    margin: 0;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.header p {
    color: #ffca95;
    margin: 5px 0 0;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 700;
}
.content {
    padding: 40px;
    line-height: 1.6;
}
.greeting {
    font-size: 18px;
    font-weight: 600;
    color: #0c3a30;
    margin-bottom: 15px;
}
.message {
    font-size: 15px;
    color: #555555;
    margin-bottom: 30px;
}
.intro {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 30px;
    color: #555555;
}
.details-box {
    background-color: #f7fafc;
    border: 1px solid #edf2f7;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 30px;
}
.details-box h3 {
    margin-top: 0;
    color: #0c3a30;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
    border-bottom: 1px solid #edf2f7;
    padding-bottom: 10px;
}
.details-row {
    display: flex;
    margin-bottom: 10px;
    font-size: 14px;
}
.details-label {
    width: 40%;
    font-weight: 600;
    color: #4a5568;
}
.details-value {
    width: 60%;
    color: #2d3748;
}
.details-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}
.details-table th, .details-table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #edf2f7;
    vertical-align: top;
}
.details-table th {
    width: 35%;
    color: #0c3a30;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    background-color: #f7fafc;
}
.details-table td {
    color: #2d3748;
    font-size: 15px;
}
.details-table td a {
    color: #0c3a30;
    text-decoration: underline;
    font-weight: 600;
}
.bio-section {
    background-color: #f7fafc;
    border-left: 4px solid #ffca95;
    padding: 20px;
    border-radius: 0 8px 8px 0;
    margin-bottom: 30px;
}
.bio-section h3 {
    margin-top: 0;
    color: #0c3a30;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 10px;
}
.bio-section p {
    margin: 0;
    font-size: 15px;
    line-height: 1.6;
    color: #4a5568;
    white-space: pre-wrap;
}
.closing {
    font-size: 15px;
    color: #555555;
    border-top: 1px solid #edf2f7;
    padding-top: 20px;
}
.footer {
    background-color: #f7fafc;
    padding: 20px 40px;
    text-align: center;
    border-top: 1px solid #edf2f7;
    font-size: 12px;
    color: #a0aec0;
}

@media only screen and (max-width: 600px) {
    .container {
        width: 100% !important;
        margin: 0 !important;
        border-radius: 0 !important;
        border: none !important;
    }
    .header {
        padding: 24px 16px !important;
    }
    .content {
        padding: 24px 16px !important;
    }
    .details-row {
        display: block !important;
        margin-bottom: 12px !important;
    }
    .details-label {
        width: 100% !important;
        display: block !important;
        margin-bottom: 2px !important;
    }
    .details-value {
        width: 100% !important;
        display: block !important;
    }
    .details-table, .details-table tbody, .details-table tr, .details-table th, .details-table td {
        display: block !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }
    .details-table th {
        width: 100% !important;
        background-color: #f0f4f8 !important;
        padding: 8px 10px !important;
        font-size: 13px !important;
    }
    .details-table td {
        width: 100% !important;
        padding: 8px 10px 14px !important;
        font-size: 14px !important;
    }
    .footer {
        padding: 30px 16px !important;
    }
}
