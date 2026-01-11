package org.redwolf.hexcore.entity;

import jakarta.persistence.*;

import java.time.LocalDateTime;
import java.util.HashSet;
import java.util.Set;

@Entity
@Table(name = "users")
@NamedQuery(name = "User.getByEmail",
        query = "FROM Users u WHERE u.email=:email")
public class Users extends BaseEntity {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    @Column(length = 50, nullable = false)
    private String fname;

    @Column(length = 50, nullable = false)
    private String lname;

    @Column(length = 150, nullable = false)
    private String email;

    @Column(length = 10, nullable = false)
    private String password;

    @Column(length = 8, nullable = false)
    private String verification_code;

    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "status_id", nullable = false)
    private Status status;

    @OneToMany(mappedBy = "users")
    private Set<Address> addresses = new HashSet<>();

    @OneToMany(mappedBy = "users")
    private Set<Orders> orders = new HashSet<>();

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

    public String getVerification_code() {
        return verification_code;
    }

    public void setVerification_code(String verification_code) {
        this.verification_code = verification_code;
    }

    public Status getStatus() {
        return status;
    }

    public void setStatus(Status status) {
        this.status = status;
    }

    public Set<Address> getAddresses() {
        return addresses;
    }

    public Set<Orders> getOrders() {
        return orders;
    }

}
