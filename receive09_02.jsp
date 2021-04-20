<%@ page language="java" contentType="text/html; charset=UTF-8" %>
<%
	request.setCharacterEncoding("UTF-8");
	
	String name = request.getParameter("NAME");
	int age = Integer.parseInt(request.getParameter("AGE"));
%>

【受信データ】<br>
名前：<%= name %><br>
年齢：<%= age %><br>