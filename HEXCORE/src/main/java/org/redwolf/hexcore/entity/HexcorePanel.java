package org.redwolf.hexcore.entity;

import jakarta.persistence.*;

@Entity
@Table(name = "hexcore_panel")
public class HexcorePanel extends BaseEntity {
    @Id
    private int id;

    @Column(length = 50, nullable = false)
    private String fname;

    @Column(length = 50, nullable = false)
    private String lname;

    @Column(length = 150, nullable = false)
    private String email;

    @Column(length = 10, nullable = false)
    private String password;

    @Column(name = "verification_code", length = 8, nullable = false)
    private String verificationCode;

    @Column(length = 10, nullable = false)
    private String mobile;



    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "status_id", nullable = false)
    private Status status;

    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "role_id", nullable = false)
    private Role role;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getFname() {
        return fname;
    }

    public void setFname(String fname) {
        this.fname = fname;
    }

    public String getLname() {
        return lname;
    }

    public void setLname(String lname) {
        this.lname = lname;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getVerificationCode() {
        return verificationCode;
    }

    public void setVerificationCode(String verificationCode) {
        this.verificationCode = verificationCode;
    }

    public String getMobile() {
        return mobile;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }



    public Status getStatus() {
        return status;
    }

    public void setStatus(Status status) {
        this.status = status;
    }

    public Role getRole() {
        return role;
    }

    public void setRole(Role role) {
        this.role = role;
    }
}
