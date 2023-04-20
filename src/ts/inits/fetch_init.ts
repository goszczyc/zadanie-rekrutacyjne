declare let adminUrl;

export default async (data) => {
    try {
        let response = await fetch(adminUrl.ajaxurl, {
            method: "POST",
            body: data,
            credentials: "same-origin",
        });
        if (!response.ok) throw new Error("Ajax failed");
        response = await response.json();

        return response;
    } catch (error) {
        console.log(error);
        return false;
    }
};
