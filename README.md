# Lawyermanagementsystem

## Introduction

Before embarking on the development of this project, I conducted extensive research to find existing systems. However, none of them met my specific requirements and expectations. While I came across informative websites showcasing details of individual lawyers and some dedicated platforms for law firms or associations, I envisioned a different approach. I aimed to create an open platform for lawyers, enabling any legal professional, regardless of their location or specialization, to register and showcase their services. Simultaneously, I wanted to provide the public with a user-friendly interface to easily find and filter lawyers based on their specific needs. This documentation delves into various aspects of my system, supported by diagrams to illustrate its functionality, as well as test cases to demonstrate its capabilities.

## 1.1 Developed System

The system I have developed presents a unique solution as an open platform for lawyers. It allows lawyers from different locations to join by providing relevant information, essentially serving as a freelancing platform for legal professionals. Users can search for suitable lawyers and engage them for individual cases. The primary objective of this system is to facilitate the process of finding appropriate lawyers. To ensure this, I have incorporated a filtering option, distinguishing it from typical lawyer finding systems. Initially, my system offers three filtering options: seniority/experience, expertise, and location. These filtering criteria enable users to identify lawyers who meet their specific requirements. Additionally, users can visit lawyer profiles to gain detailed insights into their background. Users can also send booking requests to lawyers, specifying preferred dates for appointments. Upon accepting the request, the lawyer notifies the user. Conversely, lawyers can view user details when they receive booking requests, as only registered users can send such requests. Therefore, my system encompasses three user panels: Admin, Lawyer, and General User.

## 1.2 Method Justification

Developing a system requires adhering to a specific development method. Numerous software development methods and techniques exist, including:

- Dynamic System Development Method (DSDM)
- Joint Application Development (JAD)
- Agile Development
- Structured System Analysis and Design Method (SSADM)

For this project, I have chosen the SSADM method, also known as the waterfall method. This method involves following a sequential series of steps, requiring each step to be completed accurately before proceeding to the next. Strong planning is crucial when employing this development method, as it heavily relies on practical thinking before commencing the planning phase. With well-executed planning, the likelihood of errors decreases significantly. Feasibility study represents a vital component of this methodology. Since I am the sole developer of this project and have established all the requirements myself, I have opted for this methodology, as frequent changes to requirements are unlikely. Hence, SSADM is an ideal fit for this development process.

## 1.3 The Solution that Emerged

I have created an online marketplace for lawyers, providing them with the opportunity to register and showcase their services by providing necessary information. By incorporating a filtering feature, users can effortlessly find suitable lawyers without any hassle. This system aims to address the difficulties individuals face when urgently needing legal assistance, ensuring they can find a suitable lawyer with just a few clicks on their computer screen. Lawyers must provide relevant details during the registration process, which are stored in the database's lawyer table. User information is also stored in the user table. When users send booking requests, the system saves the requests in the database. General users can filter their search for lawyers based on location, experience, and specialization. The system then displays the filtered results to the user.

## 1.4 System Aims and Objectives

Outline of Objectives:
1.	Admin will be able to login to the system with their registered id and password which is stored in database. System admin will be able to see lawyers and general user’s profile and manipulate their account
2.	Once lawyers are registered admin approval will be needed to login into the system. The admin will get the chance to verify whether the lawyer is genuine or not.
3.	Admin will also be able to block users from the system if any inconvenience happens.
4.	To make the system more secure and authentic. Users don’t have to give their password while registering. A secured password will be generated automatically and will be sent to the user into their private email.
5.	The system enables web-based booking system.
6.	Both type of user will be able to update their profile once they are logged in into the system.
7.	Any guest user will be able o see the lawyers and check their profile. But for booking the lawyer they must have to register.
## 1.5 Short overview of the remaining chapter

The remaining chapters of this documentation cover the different phases of the software development lifecycle for the Lawyer Management System. These phases include the Initial Study, Feasibility Study, Analysis, Design, and Implementation.

### Initial Study
The Initial Study phase involved analyzing the project and gathering knowledge about existing systems. Aims and objectives were established, and the development process began.

### Feasibility Study
The Feasibility Study was conducted to determine the technical, economic, legal, and operational feasibility of the system. This study ensured that the software was appropriate and viable for development.

### Analysis
In the Analysis phase, several important tasks were performed. MoSCoW prioritization was used to identify the priorities of the system's functions. Class diagrams, Use Case diagrams, and system architecture were created to document the project's requirements and structure.

### Design
The Design phase focused on the detailed design of the system. Performance aspects were considered, and detailed class diagrams and sequence diagrams were created to represent the system's capabilities.

### Implementation
The Implementation phase is the final phase of the development process. In this phase, the planned design was implemented. The database was created based on the class diagram, and coding was carried out. Testing was an important part of this phase to ensure the system's features worked as intended.

The functional and non-functional requirements of the system are also discussed in this chapter, outlining the various features and qualities that were implemented to make the system efficient, secure, and reliable.

Overall, this chapter provides an overview of the remaining sections and sets the stage for the subsequent in-depth exploration of each phase of the development process for the Lawyer Management System.

Functional requirements:

1. User registration:
   - There should be two types of user registration: one for lawyers and another for general users.
   - Three types of login panels should be available: one for admin, one for lawyers, and one for general users.

2. Mailing option:
   - Users should receive an email with an auto-generated password after completing the registration process.
   - Users need to log in to the system by accessing their email account.

3. Automatic report generation:
   - The admin dashboard should generate a comprehensive report containing information about lawyers and users.

4. Admin privileges:
   - The admin should have the ability to approve or block registered lawyers.
   - The admin should also be able to block general users if necessary.

5. Profile management:
   - Lawyers and users should be able to update their profile information and passwords as needed.

6. Lawyer profile visibility:
   - Users should be able to view lawyers' profiles but cannot send booking requests unless they are logged into the system.

7. Lawyer search functionality:
   - Users should have a search option to find suitable lawyers based on location, experience, and expertise.

8. Booking requests:
   - Users should be able to check lawyers' profiles and send them booking requests by selecting a date from a calendar.

9. Booking request status:
   - Users should be able to check the status of their booking requests through their dashboard, whether they are accepted or pending.

10. Lawyer response to booking requests:
    - Lawyers should be able to check if any booking requests have been made for them and accept or reject those requests.

Nonfunctional requirements:

1. Security:
   - The system should have robust security measures in place to protect against cyber attacks.

2. Performance:
   - The system should perform efficiently and respond quickly to user actions.

3. Storage:
   - The system should provide sufficient storage capacity to handle the data generated by lawyers and users.

4. Accessibility:
   - The system should be accessible to users with disabilities, following appropriate accessibility guidelines.

5. Availability:
   - The system should be available and accessible to users at all times, with minimal downtime.

6. Reliability:
   - The system should be reliable, ensuring that user data and bookings are handled accurately and consistently.

7. Maintainability:
   - The system should be designed in a way that allows for easy maintenance and updates in the future.

8. Data integrity:
   - The system should ensure the integrity and accuracy of the data stored within it.

9. Validation:
   - The system should validate user inputs to ensure data integrity and prevent errors.

10. Configuration:
    - The system should provide options for configuration and customization according to specific requirements.

Choice of programming language:

For the development of the web-based system, the following programming languages were selected:

- HTML: Used for creating the basic structure of the website, including forms, input fields, navbar, header, footer, buttons, and other necessary elements.
- CSS: Used for designing the layout of the website, including styling, margins, and padding.
- JavaScript: Used as the scripting language for implementing validation and other interactive features.
- Bootstrap library: Utilized for responsive design and layout of the website.
- PHP: Chosen as the middleware language for backend processing, including CRUD functions, login, registration, filtering, etc.
- MySQL: Selected as the database query language for creating tables and executing backend queries.

System cutover from the development architecture to the implementation architecture:

System cutover refers to the transition from an old telecommunication system to a new one. In the case of my system, a cutover was not necessary as it was a brand-new system. There was no existing system to replace or migrate from, eliminating the need for a cutover plan.

Data migration from the development architecture and/or existing systems to the implementation architecture:

Data migration involves transferring data from one storage or database to another. As my system is entirely new, there was no need to migrate data from any existing databases. However, before using the system, the management team had to enter essential data into the database.

Training:

Training is crucial for the successful implementation of any new system. To ensure the system's smooth operation, the recruited personnel need to be trained. Although the system is designed to be user-friendly, proper training is required for the administrative level. Employees must have a comprehensive understanding of all the system's features, including how to operate from the admin panel and manage the database. Without adequate training, the system may encounter difficulties and potential failures.

Other Project Matters:

1. Project Management:
   - Project management encompasses the entire process of system development, from requirement analysis to testing and maintenance. It involves initiating, planning, executing, controlling, and closing activities.
   - Key areas of project management include integration, scope, time, cost, quality, procurement, human resources, communication, risk management, and stakeholder management. Paying attention to these areas contributes to the project's success.

2. Problems identified and resolved for the system:
   - During thedevelopment of the system, several problems may have been identified and resolved. These could include issues with database design, user interface design, security vulnerabilities, performance optimization, and bugs in the code. Each problem would have been addressed and resolved through analysis, troubleshooting, and debugging.

3. Testing:
   - Testing is a crucial phase in system development to ensure that the system functions as intended and meets the specified requirements. It involves a series of tests, including unit testing, integration testing, system testing, and user acceptance testing. Testing helps identify and fix any issues or bugs before the system is deployed.

4. Deployment and rollout:
   - Once the system has been developed, tested, and approved, it can be deployed and rolled out to users. This involves making the system accessible to users, installing it on servers, configuring the necessary infrastructure, and providing access to the system through appropriate channels.

5. System documentation:
   - Documentation is essential for the system's maintenance and future updates. It includes technical documentation, user manuals, system architecture diagrams, database schemas, and any other relevant documentation that helps understand and operate the system.

6. Maintenance and support:
   - After the system is deployed, ongoing maintenance and support are necessary to ensure its continued operation. This includes monitoring the system for issues, providing technical support to users, applying updates and patches, and addressing any bugs or vulnerabilities that may arise.

7. User feedback and system improvements:
   - Feedback from users is valuable for improving the system and addressing any shortcomings or usability issues. User feedback should be collected and analyzed to identify areas for improvement and implement updates or enhancements to the system accordingly. This iterative process helps enhance the system's functionality and user experience over time.
  
 
### Testing and Quality Assurance

The testing and quality assurance chapter focuses on the thorough testing of the Lawyer Management System to ensure its functionality, usability, and reliability. The chapter begins by discussing the importance of testing and quality assurance in software development.

Various testing techniques and methodologies are explored, including functional testing, usability testing, performance testing, and security testing. The chapter explains how each type of testing contributes to identifying and resolving potential issues in the system.

The chapter also emphasizes the importance of test planning and test cases. It explains how test planning involves defining the testing objectives, identifying the scope and requirements, and creating a test plan. Test cases are then developed to validate the system's functionality and ensure that it meets the specified requirements.

Quality assurance activities, such as code reviews and inspections, are also discussed. The chapter highlights the benefits of conducting code reviews to identify coding errors, improve code quality, and ensure adherence to coding standards.

Additionally, the chapter discusses the use of automated testing tools and frameworks to streamline the testing process. It explains how automation can help in executing repetitive test cases, reducing human error, and improving overall testing efficiency.

The chapter concludes by highlighting the importance of documenting and tracking issues. It emphasizes the need for a systematic approach to documenting and resolving identified issues, including the use of issue tracking systems or project management tools.

Chapter 14: Deployment and Maintenance

The deployment and maintenance chapter focuses on the process of deploying the Lawyer Management System to a production environment and ensuring its ongoing maintenance and support.

The chapter begins by discussing the steps involved in deploying the system, including server setup, database configuration, file transfer, and domain registration. It highlights the importance of thorough testing and backup procedures before deploying the system to minimize any potential risks or disruptions.

Once the system is deployed, the chapter discusses the ongoing maintenance and support activities. It emphasizes the need for monitoring system performance, resolving any reported issues or bugs, and applying software updates and patches as needed.

The chapter also addresses the importance of user support and training. It explains how providing user documentation, conducting training sessions, and offering timely support can enhance user satisfaction and ensure effective system utilization.

Furthermore, the chapter highlights the significance of conducting regular system backups and implementing disaster recovery procedures. It emphasizes the need to protect the system and its data from potential data loss or security breaches.

Finally, the chapter discusses the process of evaluating and incorporating user feedback and implementing enhancements or new features based on user requirements. It emphasizes the iterative nature of software development and the importance of continuous improvement to meet evolving user needs.

Overall, the deployment and maintenance phase ensures the smooth operation and longevity of the Lawyer Management System, providing users with a reliable and efficient platform for lawyer management.


